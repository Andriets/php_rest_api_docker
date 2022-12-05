<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

$mysqli = new mysqli("db", "root", "example", "phpAppDb");
$data = json_decode(file_get_contents("php://input"));

$sql = 'DELETE FROM Users WHERE Id = ' . $data->id;

if($mysqli->query($sql)) {
echo json_encode(
    array('message' => 'User Deleted')
);
} else {
echo json_encode(
    array('message' => 'User Not Deleted')
);
}
