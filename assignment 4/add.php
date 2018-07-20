<?php
require 'connet.php';
   
    $name=$author=$publi=$ava=$userid="";
    $name=$_POST["name"];
    $author=$_POST["author"];
    $publi=$_POST["publi"];
    $ava=1;
    $userid=0;
    $sql = "INSERT INTO books (name,author,publi,Availability,userid)
    VALUES ('$name','$author','$publi','$ava','$userid')";

     if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header('Location:admin.php');
?>