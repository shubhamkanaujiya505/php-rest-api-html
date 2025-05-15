<?php
header('Content-Type: application/json');
header('Access-Control-allow-Origin: *');
include "config.php";

$sql = "select * from api_data";
$result = mysqli_query($conn, $sql) or die("sql query failed");
if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode(($output));
} else {
    echo json_encode(array('message' => 'no record foun.d', 'status' => false));
}
?>
