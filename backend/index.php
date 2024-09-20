<?php
require "./config.php";
header("Access-Control-Allow-Origin: http://localhost:5173");
header("Content-Type: application/json");

$response = array(
    "message1" => "Backend is connected!",
    "message2" => "DataBase is connected!"
);

echo json_encode($response);
?>