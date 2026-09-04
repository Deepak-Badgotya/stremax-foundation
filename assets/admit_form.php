<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

include_once "connect.php";

$input = file_get_contents('php://input');

if (empty($input)) {
    echo json_encode(['status' => 'error', 'message' => 'No data received']);
    exit;
}

$data = json_decode($input, true);

$aadhar = $data['aadhar'];
$dob = $data['dob'];
$mobile = $data['mobile'];

if (
    empty($data['aadhar']) ||
    empty($data['dob']) ||
    empty($data['mobile'])
) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid or missing fields']);
    exit;
} else {
    $sql = mysqli_query($conn, "SELECT * FROM admit_card WHERE ((aadhar = '$aadhar') + (dob = '$dob') + (mobile = '$mobile')) >= 2");
    if ($row = (mysqli_fetch_assoc($sql))) {
        // Getting required data from it
        $id = $row['id'];
        echo json_encode([
            'status' => 'success',
            'id' => $id,
            'student_name' => $row,
            'message' => 'Student found'
        ]);
    } else {
        echo json_encode([
            'message' => 'No record found'
        ]);
    }
}
