<?php
$servername = "localhost";
$username = "root";
$password = NULL;
$db = "alib";
$conn =new mysqli($servername,$username,$password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>