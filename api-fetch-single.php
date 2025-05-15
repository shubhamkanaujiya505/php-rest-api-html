<?php
header('Content-Type: application/json');
header('Access-Control-allow-Origin: *');
include "config.php";

$data = json_decode(file_get_contents("php://input"), true);
// print_r($data);die;
$student_id = $data['id'];
$sql = "select * from api_data where id = {$student_id}";
$result = mysqli_query($conn, $sql) or die("sql query failed");
if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode(($output));
} else {
    echo json_encode(array('message' => 'No Record Found', 'status' => false));
}
?>
