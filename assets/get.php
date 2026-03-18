<?php
header("Content-Type: application/json");

// Connecting to database
include_once "connect.php";

// Get district ID from request
$d_id = isset($_GET["d_id"]) ? (int) $_GET["d_id"] : 0;

if ($d_id > 0) {
    // Fetch blocks for specific district
    $sql = "SELECT b_id, bname FROM block WHERE d_id = $d_id";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo json_encode(["error" => "Query failed: " . mysqli_error($conn)]);
        mysqli_close($conn);
        exit;
    }

    $blocks = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $blocks[] = $row;
    }

    echo json_encode($blocks);
} else {
    // Fetch all districts
    $sql = "SELECT d_id, dname FROM district";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo json_encode(["error" => "Query failed: " . mysqli_error($conn)]);
        mysqli_close($conn);
        exit;
    }

    $districts = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $districts[] = $row;
    }

    echo json_encode($districts);
}

// Close connection
mysqli_close($conn);
?>