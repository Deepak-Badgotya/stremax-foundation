<?php
//Include the Razorpay PHP library
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

// Initialize Razorpay with your key and secret
$api_key = 'rzp_test_KM0iUSUUucsAtq';
$api_secret = 'hvrm1BenjExzjZ4GZLKbTV6R';

$api = new Api($api_key, $api_secret);

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    echo $name = $_POST["name"]; echo "<br>";
    echo $dob = $_POST["dob"]; echo "<br>";
    echo $gender = $_POST["gender"]; echo "<br>";
    echo $age = $_POST["age"]; echo "<br>";
    echo $f_name = $_POST["f_name"]; echo "<br>";
    echo $m_name = $_POST["m_name"]; echo "<br>";
    echo $marital_st = $_POST["marital_st"]; echo "<br>";
    echo $category = $_POST["category"]; echo "<br>";
    echo $diff_abled = $_POST["diff_abled"]; echo "<br>";
    echo $mobile = $_POST["mobile"]; echo "<br>";
    echo $whatsapp = $_POST["whatsapp"]; echo "<br>";
    echo $email = $_POST["email"]; echo "<br>";
    echo $corresp_add = $_POST["corresp_add"]; echo "<br>";
    echo $perm_add = $_POST["perm_add"]; echo "<br>";

    // Process the form data (e.g., send an email, store in a database)
    // ...

    // Example: Display the submitted data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email. "<br>";
    echo "Contact ". $mobile;
}*/



// Create an order

$order = $api->order->create([
    'amount' => 45000, // amount in paisa (100 paise = 1 rupee)
    'currency' => 'INR',
    'receipt' => 'order_receipt_12asa3'
]);

// Get the order ID
$order_id = $order->id;

// Set your callback URL
$callback_url = "verify.php";

// Include Razorpay Checkout.js library
echo '<script src="https://checkout.razorpay.com/v1/checkout.js"></script>';

// Create a payment button with Checkout.js
echo '<button onclick="startPayment()">Pay with Razorpay</button>';

// Add a script to handle the payment
echo '<script>
    function startPayment() {
        var options = {
            key: "' . $api_key . '", // Enter the Key ID generated from the Dashboard
            amount: ' . $order->amount . ', // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            currency: "' . $order->currency . '",
            name: "Acme Corp",
            description: "Test transaction",
            image: "https://cdn.razorpay.com/logos/GhRQcyean79PqE_medium.png",
            order_id: "' . $order_id . '", // This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            prefill: {
                name: "",
                email: "",
                contact: ""
            },
            notes: {
                address: "Razorpay Corporate Office"
            },
            theme: {
                "color": "#3399cc"
            },
            callback_url: "' . $callback_url . '"
        };
        var rzp = new Razorpay(options);
        rzp.open();
    }
</script>';
?>