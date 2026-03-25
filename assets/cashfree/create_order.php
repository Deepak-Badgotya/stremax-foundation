<?php
// Gemini code 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include_once "../connect.php";

$input = file_get_contents('php://input');

if (empty($input)) {
    echo json_encode(['status' => 'error', 'message' => 'No data received']);
    exit;
}

// FIX 1: Removed the 'echo' from this line
$data = json_decode($input, true);

$name = $data['name'];
$f_name = $data['f_name'];
$class = $data['classs'];
$class_group = $data['class_group'];
$vil_city = $data['vil_city'];
$block = $data['block'];
$district = $data['district'];
$mobile = $data['mobile'];
$whatsapp = $data['whatsapp'];
$aadhar = $data['aadhar'];
$dob = $data['dob'];
$inst_type = $data['inst_type'];
$inst_name = $data['inst_name'];
$ssse_code = $data['ssse_code'];
$inst_vill = $data['inst_vill'];
$inst_dist = $data['inst_dist'];
$inst_block = $data['inst_block'];
$ssse_incharge = $data['ssse_incharge'];
$exam_district = $data['exam_district'];
$exam_block = $data['exam_block'];

// Check whether the username exists
$existSql = "SELECT * FROM `students` WHERE aadhar = '$aadhar'";
$result = mysqli_query($conn, $existSql);
$numExsitsRow = mysqli_num_rows($result); 

if ($numExsitsRow > 0) {
    // Student already exists - Set error message
    echo json_encode(["success" => false, "error" => "Aadhaar number already exists"]);
    exit;
} else {
    if (
        empty($data['name']) ||
        empty($data['mobile']) ||
        empty($data['aadhar']) ||
        !is_numeric($data['mobile'])
    ) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid or missing fields']);
        exit;
    } else {
        $sql = "INSERT INTO `students` (`name`, `f_name`, `class`, `class_group`, `vill_city`, `block`, `district`, `mobile`, `whatsapp`, `aadhar`, `dob`, `inst_type`, `inst_name`, `inst_vill`, `exam_dist`, `exam_block`,`pay_status`) VALUES ('{$name}', '{$f_name}', '{$class}', '{$class_group}', '{$vil_city}', '{$block}', '{$district}', '{$mobile}', '{$whatsapp}', '{$aadhar}', '{$dob}', '{$inst_type}', '{$inst_name}', '{$inst_vill}', '{$exam_district}', '{$exam_block}', 'PENDING')";

        if (mysqli_query($conn, $sql)) {
            $id = mysqli_insert_id($conn);
            // ------------------- FUNCTIONS ----------------------

            function generateUniqueOrderId($prefix = "Stremax")
            {
                return $prefix . time() . rand(100, 999);
            }

            function logMessage($message)
            {
                $logFile = __DIR__ . "/api_log.txt";
                $logEntry = "[" . date("Y-m-d H:i:s") . "] " . $message . PHP_EOL;
                file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);
            }

            function createCashfreeOrder($id, $name, $mobile, $amount)
            {
                $appId = '8420072250b7c4da59170b74bb700248';
                $secretKey = 'cfsk_ma_prod_0c6ecd97d3a25e95060ffdec5b4cdd82_8ed72881';
                $orderId = generateUniqueOrderId();

                $url = "https://api.cashfree.com/pg/orders";

                $payload = [
                    "order_id" => $orderId,
                    "order_amount" => $amount,
                    "order_currency" => "INR",
                    "order_note" => "Form Payment",
                    "customer_details" => [
                        "customer_id" => (string) $id,
                        "customer_phone" => $mobile,
                        "customer_name" => $name
                    ],
                    "order_meta" => [
                        // Production url
                        //"return_url" => "https://stremaxfoundation.org/assets/cashfree/verify.html?txnId={order_id}"
                        "return_url" => "https://elle-noisy-carelessly.ngrok-free.dev/stremax-new/assets/cashfree/verify.html?txnId={order_id}"
                    ]
                ];

                $headers = [
                    "Content-Type: application/json",
                    "x-client-id: $appId",
                    "x-client-secret: $secretKey",
                    "x-api-version: 2023-08-01" // Updated to a stable version
                ];

                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                $response = curl_exec($ch);

                if (curl_errno($ch)) {
                    logMessage("CURL ERROR: " . curl_error($ch));
                }

                // Modern way to close
                unset($ch);

                return json_decode($response, true);
            }

            // ------------------- MAIN EXECUTION ----------------------

            $name = $data['name'];
            $mobile = $data['mobile'];
            $amount = $data['amount'] ?? 200; // Added fallback amount

            $response = createCashfreeOrder($id, $name, $mobile, $amount);
            logMessage("PAYMENT REQUEST: " . json_encode($response));

            // Check for success
            if (isset($response['payment_session_id'])) {
                echo json_encode([
                    "success" => true,
                    "order_id" => $response['order_id'],
                    "payment_session_id" => $response['payment_session_id'],
                    "redirect_url" => $response['payments']['url'] ?? "https://api.cashfree.com" . $response['payment_session_id']
                ]);
                exit;
            }
            // Error handling
            echo json_encode([
                "success" => false,
                "error_code" => $response['code'] ?? 'unknown_error',
                "error_message" => $response['message'] ?? 'Unexpected error from Cashfree',
                "raw" => $response // Useful for debugging
            ]);
        } else {
            echo json_encode([
                'message' => 'Failed to initialize payment: ' . mysqli_error($conn),
            ]);
        }
    }

}


