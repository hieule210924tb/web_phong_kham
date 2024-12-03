<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'du_an_phong_kham';

$conn = new mysqli($server, $user, $pass, $database);
if ($conn->connect_errno) {
    die("Connection failed:" . $conn->connect_errno);
} else {
    echo 'Connection successfully';
    echo "<br>";
}