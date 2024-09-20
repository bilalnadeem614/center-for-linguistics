<?php
$servername = "127.0.0.1";
$username = "root";
$password = "12345";
$dataBase = "test";



$conn = new mysqli($servername, $username, $password,$dataBase);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>