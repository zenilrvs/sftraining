<?php
require 'connet.php';
session_start();  
$z=$_SESSION["id"];
$bid=$_POST["bid"];
$sql = "UPDATE books SET Availability=0, userid=$z WHERE id=$bid";

if ($conn->query($sql) === TRUE) {
    echo "Book issued successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>