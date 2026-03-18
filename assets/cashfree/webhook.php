<?php
// Old code
/* require_once "../connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Get current timestamp
    $timestamp = date("Y-m-d H:i:s");

    //Define log file
    $logFile = "webhook.log"; 

    // Decode JSON data recieved from webhook
    $postData = json_decode(file_get_contents("php://input"), true);

    // Prepare POST data for logging
    $postDataString = (string)$timestamp. "\n" . json_encode($postData) . "\n\n";

    // Write POST data to logfile
    file_put_contents($logFile, $postDataString, FILE_APPEND | LOCK_EX);
} else {
    // Log if no post data recieved
    $logFile = "webhook.log";
    $message = "No POST data recieved.\n";
    file_put_contents($logFile, $message, FILE_APPEND | LOCK_EX);
}
 */

require_once "../connect.php";

$clientSecret = "cfsk_ma_test_f19b40721d04e9dbd81de6986be7f6bc_c5295e3c";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $headers = getallheaders();
    $rawBody = file_get_contents("php://input");

    $receivedSignature = $headers['x-webhook-signature'] ?? $headers['X-Webhook-Signature'] ?? '';
    $receivedTimestamp = $headers['x-webhook-timestamp'] ?? $headers['X-Webhook-Timestamp'] ?? '';

    // Verify Signature
    $payload = (string)$receivedTimestamp . $rawBody;
    $generatedSignature = base64_encode(hash_hmac('sha256', $payload, $clientSecret, true));

    if ($generatedSignature !== $receivedSignature) {
        http_response_code(401);
        exit("Invalid Signature");
    }

    $postData = json_decode($rawBody, true);
    $eventType = $postData['type'] ?? ''; // e.g., PAYMENT_SUCCESS_WEBHOOK or PAYMENT_FAILED_API

    $order_id = $postData['data']['order']['order_id'] ?? null;
    $customer_id = $postData['data']['customer_details']['customer_id'] ?? null;
    //$payment_status = $postData['data']['payment']['payment_status'] ?? 'UNKNOWN';
    $payment_status = $postData['data']['order']['order_status'] ?? 'UNKNOWN';


    // Handle different event types
    switch ($eventType) {
        case 'PAYMENT_SUCCESS_WEBHOOK':
            $finalStatus = 'PAID';
            break;
        case 'PAYMENT_FAILED_API':
            $finalStatus = 'FAILED';
            // Optional: Log failure reason
            $failureReason = $postData['data']['payment']['payment_message'] ?? 'No reason provided';
            file_put_contents("webhook.log", "Order $order_id Failed: $failureReason\n", FILE_APPEND);
            break;
        default:
            $finalStatus = $payment_status; // Fallback to raw status
            break;
    }

    if ($order_id && $customer_id) {
        // Update DB with the specific success or failure status
        $stmt = $conn->prepare("UPDATE students SET pay_status = ?, trans_id = ? WHERE id = ?");
        $stmt->bind_param("ssi", $finalStatus, $order_id, $customer_id);

        if ($stmt->execute()) {
            http_response_code(200);
            echo "OK";
        }
        $stmt->close();
    }
}