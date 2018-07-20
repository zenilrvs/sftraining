<?php
require 'connet.php'; 
?> 
<!DOCTYPE html>
<html>
	<head>
		<title>Library Portal</title>
		<link rel="stylesheet" type="text/css" href="assign4.css">
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
		</div>
		<div id="C">
			<h2>Register</h2>
			<form action="A42.PHP" method="post">
				Name:<input type="text" name="name" placeholder="Enter name" required> 
				<span style="color: red;">*</span><br><br>
				Username:<input type="text" name="username" placeholder="Enter Username" required> 
				<span style="color: red;">*</span><br><br><?php $usernameErr=""; echo $usernameErr;?>
				Password:<input type="password" name="password" placeholder="Enter password" required> 
				<span style="color: red;">*</span><br><br>
				E-mail: <input type="email" name="email" placeholder="Enter E-mail"><br><br>
				 <input type="radio" name="gender" value="male" checked> Male &emsp;
				 <input type="radio" name="gender" value="female"> Female  &emsp;
				 <input type="radio" name="gender" value="other"> Other<br><br>
				 User Type <span style="color: red;">*</span>:
				 <select name="usertype">
				 	<option>User</option>
				 	<option>Admin</option>
				 </select><br><br>
				 <input type="submit" name="reg" value="Register" style="background-color: #647ab7; border-radius: 10px; 
				width: 100px; height: 40px; font-size: 15px; color: white;">
			</form>
		</div>
		<script type="text/javascript">
			alert("Username already exists");
		</script>
	</body>
</html>