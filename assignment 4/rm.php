<?php
require 'connet.php';
session_start();
$bid=$_POST["bid"];
 

$sql = "UPDATE books SET Availability=1, userid=0 WHERE id=$bid";

if ($conn->query($sql) === TRUE) {
    echo "Book removed successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>