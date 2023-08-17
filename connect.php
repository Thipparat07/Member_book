<?php
$servername = "localhost";
$username = "demo";
$password = "abc123";
$dbname = "member_book";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

$conn->close();
?>