<?php
require 'connet.php';    
    $username=$email=$gender=$password=$user=$name="";
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $usertype=$_POST["usertype"];
    $gender=$_POST["gender"];
    $sl = "SELECT * FROM users";
    $result = $conn->query($sl);
    while($row = $result->fetch_assoc()) {
        if($username==$row["username"]){
            $usernameErr = "Username already exists";
            header('Location: assign4a.php');
            $conn->close();
        }
    }
    $sql = "INSERT INTO users (username,password,usertype,gender,email)
    VALUES ('$username','$password','$usertype','$gender','$email')";

     if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registered!</title>
    <link rel="stylesheet" type="text/css" href="assign4.css">
    <style type="text/css">
        #b{
            position: relative;
            left: 500px;
            height: 180px;
        }
    </style>
</head>
<body>
    <h1>Library Portal</h1>
        <div id="B">
            <h2>Login</h2>
            <form action="A41.php" method="post">
                Username:<input type="text" name="username" placeholder="Enter Username" required><br><br>
                Password:<input type="password" name="password" placeholder="Enter password" required><br><br>
                <input type="submit" name="Login" value="Login" style="background-color: #647ab7; border-radius: 10px; 
                width: 100px; height: 40px; font-size: 15px; color: white;">
            </form>
            <script type="text/javascript">
                alert("You have registered succesfully.Please log in to continue")
            </script>
</body>
</html>