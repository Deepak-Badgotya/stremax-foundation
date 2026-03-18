<?php
//Include the Razorpay PHP library
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

// Initialize Razorpay with your key and secret
$api_key = 'rzp_test_KM0iUSUUucsAtq';
$api_secret = 'hvrm1BenjExzjZ4GZLKbTV6R';

$api = new Api($api_key, $api_secret);

// Check if payment is successful
$success = true;

$error = null;

// Get the payment ID and the signature from the callback
$payment_id = $_POST['razorpay_payment_id'];
$razorpay_signature = $_POST['razorpay_signature'];

try {
    // Verify the payment
    $attributes = array(
        'razorpay_order_id' => $_POST['razorpay_order_id'],
        'razorpay_payment_id' => $payment_id,
        'razorpay_signature' => $razorpay_signature
    );
    $api->utility->verifyPaymentSignature($attributes);
} catch (\Razorpay\Api\Errors\SignatureVerificationError $e) {
    $success = false;
    $error = 'Razorpay Signatture Verification Failed';
}

if ($success) {
    //Payment is successful, update your database or perform other actions

    //Fetch the payment details
    $payment = $api->payment->fetch($payment_id);

    // Issue the invoice
    $invoice = $api->invoice->fetch($payment['invoice_id'])->issue();
    


    //You can access payment details like $payment->amount, $payment->status, etc.
    echo $amount_paid = $payment->amount / 100; // convert amount from paise to rupees
    echo $name = $payment['name'];
    echo $email = $payment['email'];
    echo $file = $payment['file'];

    echo "Payment Successful! Amount: $amount_paid INR";
} else {
    // Payment failed, handle accordingly 
    echo "Payment Failed! Error: $error";
}

?>