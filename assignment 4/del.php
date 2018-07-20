<?php
require 'connet.php';
$bid=$_POST['bid'];
$sql = "DELETE FROM books WHERE id=$bid";

if ($conn->query($sql) === TRUE) {
    echo "Book removed successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>