<?php
header('Content-Type: application/json');
header('Access-Control-allow-Origin: *');
include "config.php";

$data = json_decode(file_get_contents("php://input"), true);
// print_r($data);die;
$name = $data ["name"];
$email = $data["email"];
$phone = $data["phone"];
$sql = "insert into api_data(name,email,phone) values('{$name}','{$email}','{$phone}')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'Record Inserted Successfully', 'status' => true));
} else {
    echo json_encode(array('message' => 'No Record Found', 'status' => false));
}
?>
