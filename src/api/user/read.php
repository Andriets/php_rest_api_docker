<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$mysqli = new mysqli("db", "root", "example", "phpAppDb");

$sql = 'SELECT * FROM Users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

echo json_encode($users);
