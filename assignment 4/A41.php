<?php
session_start();
require 'connet.php'; 
 $_SESSION["username"]=$_POST["username"];
 $_SESSION["password"]=$_POST["password"];
 $sl = "SELECT * FROM users";
    $result = $conn->query($sl);
    while($row = $result->fetch_assoc()) {
        if($_SESSION["username"]==$row["username"]){
        	if($_SESSION["password"]!=$row["password"]){
            header('Location: assign4b.php');
            $conn->close();
            session_unset(); 
            session_destroy(); 
            }
            else {
            $_SESSION["usertype"]=$row["usertype"];
            $_SESSION["id"]=$row["id"];
            break;
        }
    
        }
    }
    if($_SESSION["usertype"]==User){
    	header('Location: user.php');
    }
    else if($_SESSION["usertype"]==Admin){
    	header('Location: admin.php');
    }
    else{
    header('Location: assign4b.php');
    $conn->close();
    session_unset(); 
    session_destroy(); 	
    }
?>
