<?php
header("Content-Type: application/json");
//Connecting older stremax data for test
include_once "connect.php";

// Getting distrcits ============
$sql = "SELECT d_id, dname FROM district";

$result = mysqli_query($conn, $sql);

$output = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;
    }
} else {
    $output["empty"] = ["empty"];
}

// encoding data into json
echo json_encode($output);

//Always close connection
mysqli_close($conn);
?>