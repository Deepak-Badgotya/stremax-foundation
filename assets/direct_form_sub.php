<?php
// Gemini code 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include_once "connect.php";

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

// Check whether the username exists
$existSql = "SELECT * FROM `students_req` WHERE aadhar = '$aadhar'";
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
        $sql = "INSERT INTO `students_req` (`name`, `f_name`, `class`, `class_group`, `vill_city`, `block`, `district`, `mobile`, `whatsapp`, `aadhar`, `dob`, `inst_type`, `inst_name`, `inst_vill`) VALUES ('{$name}', '{$f_name}', '{$class}', '{$class_group}', '{$vil_city}', '{$block}', '{$district}', '{$mobile}', '{$whatsapp}', '{$aadhar}', '{$dob}', '{$inst_type}', '{$inst_name}', '{$inst_vill}')";

        if (mysqli_query($conn, $sql)) {
            echo json_encode([
                'success' => true,
                'message' => 'Form submitted successfully',
                'id' => mysqli_insert_id($conn)
            ]);
        } else {
            echo json_encode([
                'message' => 'Failed to submit form: ' . mysqli_error($conn),
            ]);
        }
    }
}