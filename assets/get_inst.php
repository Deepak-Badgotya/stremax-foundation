<?php
header("Content-Type: application/json");
//Connecting older stremax data for test
include_once "connect.php";

$b_id = isset($_GET["b_id"]) ? (int) $_GET["b_id"] : 0;

if ($b_id > 0) {
    $sql = "SELECT * FROM institute WHERE b_id = $b_id";
    $result = $conn->query($sql);

    $blocks = [];
    if (mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $institutes[] = $row;
        }

        echo json_encode($institutes);
    } else {
        echo json_encode([]);
    }

} else {
    echo json_encode([]);
}

mysqli_close($conn);
?>