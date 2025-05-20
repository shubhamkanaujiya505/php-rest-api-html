<?php
header('Content-Type: application/json');
header('Access-Control-allow-Origin: *');
header('Access-Control-allow-Methods: POST');
header('Access-Control-allow-Headers: Access-Control-allow-Headers, Content-Type, Access-Control-allow-Methods, Authorization, X-Requested-With');
include "config.php";

$data = json_decode(file_get_contents("php://input"), true);
// print_r($data);die;
$student_id = $data['id'];
$sql = "delete from api_data where id = {$student_id}";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'Delete Record Successfully', 'status' => true));
} else {
    echo json_encode(array('message' => 'Delete Record Not Successfully', 'status' => false));
}

?>
