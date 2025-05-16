<?php
header('Content-Type: application/json');
header('Access-Control-allow-Origin: *');
header('Access-Control-allow-Methods: PUT');
header('Access-Control-allow-Headers: Access-Control-allow-Headers, Content-Type, Access-Control-allow-Methods, Authorization, X-Requested-With');
include "config.php";

$data = json_decode(file_get_contents("php://input"), true);
// print_r($data);die;
$id = $data["id"];
$name = $data["name"];
$email = $data["email"];
$phone = $data["phone"];
$sql = "update api_data set name='{$name}',email='{$email}',phone='{$phone}' where id = '{$id}'";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'Record update Successfully', 'status' => true));
} else {
    echo json_encode(array('message' => 'Record Not Update', 'status' => false));
}

?>
