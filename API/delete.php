<?php
include ("../config.php");
header('Content-Type: application/json');

$congin = new Config();
$conn_res = $congin->connect();


$id = $_POST['id'];
$arr = array();

if ($id != null ) {
    if ($conn_res) {
        $sql = "DELETE FROM `booking` WHERE `id`= $id";
        $response = mysqli_query($conn_res, $sql);
        if ($response) {
            $arr = array("status_code" => "200", "message" => "Data Delete Successfully", "is_success" => "true");
            echo json_encode($arr, JSON_PRETTY_PRINT);
            http_response_code(200);
        } else {
            $arr = array("status_code" => "500", "message" => "Data delete Failed", "is_success" => "false");
            echo json_encode($arr, JSON_PRETTY_PRINT);
            http_response_code(500);
        }
    } else {
        $arr = array("status_code" => "500", "message" => "Connection Failed", "is_success" => "false");
        echo json_encode($arr, JSON_PRETTY_PRINT);
        http_response_code(500);
    }
} else {
    $arr = array("status_code" => "400", "message" => "Id is must be required", "is_success" => "false");
    echo json_encode($arr, JSON_PRETTY_PRINT);
    http_response_code(400);
}
