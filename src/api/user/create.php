<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization,X-Requested-With');

$mysqli = new mysqli("db", "root", "example", "phpAppDb");
$data = json_decode(file_get_contents("php://input"));

$sql = 'INSERT INTO Users (FirstName, LastName) VALUES (' . $data->firstname . ', ' . $data->lastname  . ')';

if($mysqli->query($sql)) {
echo json_encode(
    array('message' => 'User Created')
);
} else {
echo json_encode(
    array('message' => 'User Not Created')
);
}
