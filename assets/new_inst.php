<?php
header("Content-Type: application/json");
//Connecting older stremax data for test
include_once "connect.php";
// Get POST data
$input = file_get_contents("php://input");
$data = json_decode($input, true);

$b_id = $data["b_id"];
$name = $data["name"];
$address = $data["address"];
$type = $data["type"];

/* $response = ["success" => false, "message" => ""]; */

if ($b_id > 0 && !empty($name)) {
    // Insert new institute
    $sql = "INSERT INTO institute (inst_name, ssse_code, inst_incharge, inst_add, inst_type, b_id) VALUES ('{$name}', 'Not Applicable', 'Not Applicable', '{$address}', '{$type}', '{$b_id}')";

    if (mysqli_query($conn, $sql)) {
        echo json_encode([
            'success' => true,
            'message' => 'Institute added successfully',
            'inst_id' => mysqli_insert_id($conn),
            'inst_name' => $name,
            'inst_add' => $address,
            'inst_type' => $type,
        ]);
    } else {
        echo json_encode([
            'message' => 'Failed to add institute: ' . mysqli_error($conn),
        ]);
    }
} else {
    echo json_encode([
        'message' => 'Invalid data. Block ID and Institute Name are required.',
    ]);
}

mysqli_close($conn);
