<?php
session_start();
require 'connet.php';
$sl = "SELECT * FROM books";
$result = $conn->query($sl);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Library Portal</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <link rel="stylesheet" type="text/css" href="assign4.css">
  <style>
#Z{
  -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s; 
    animation-name: zoom;
    animation-duration: 0.6s;
}
table{
  color:white;
  width:100%;
  border-collapse:collapse;
  font-family: Arial;
}
th{
  font-size:20px;

}
th,td{
    text-align: center;
    border: 2px solid white;
    padding:5px;
}
tr:nth-child(odd){
  background-color:#660066;
}
.animate {
    -webkit-animation: zoom 0.6s;
    animation: zoom 0.6s
}

@-webkit-keyframes zoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

</style>
</head>
<body>
 <a href="assign4.php" onclick="logout()" style="text-align: right; background-color: #660066; border-radius: 10px; display: inline-block; position: relative; left: 500px; padding: 15px; text-decoration: none; color: white;">Logout</a><br>

 <h1>Welcome  Admin <?php echo $_SESSION["username"]; ?></h1>
 <button onclick="remove()" style="border:0px solid black; background-color: #660066; border-radius: 10px; display: inline-block; position: relative;left: -450px;  padding: 15px; text-decoration: none; color: white;">Add book</button><br><br>
 <table id="bo">
            <tr>
              <th>Name</th>
              <th>Author</th>
              <th>Publisher</th>
              <th>Availability</th>
              <th>Delete</th>
            </tr>
            <?php

while($row = $result->fetch_assoc()) {
$f1=$row["name"];
$f2=$row["author"];
$f3=$row["publi"];
$f4=$row["Availability"];
$f5=$row["id"];
?>

<tr>
<td>
<?php echo $f1; ?>
</td>
<td>
<?php echo $f2; ?>
</td>
<td>
<?php echo $f3; ?>
</td>
<td>
<?php echo $f4; ?>
</td>
<td>
<button onclick="del('<?php echo $f4 ?>','<?php echo $f5 ?>')" style="border:0px solid black; background-color: #cc00cc; border-radius: 10px; display: inline-block;   padding: 15px; text-decoration: none; color: white;">REMOVE</button><b><br>
</td>
</tr>
<?php
}?>
       </table>
<div id="Z" style="background-color: #660066; position: relative; width: 640px; top: -200px; left: 400px; display: none;">
  <span style="color: red; position: relative; left: 300px; font-size: 20px;" onmouseover="this.style.cursor='pointer'" title="close" onclick="cls()"><b>X</b></span>
  <table id="lo">
            <tr>
              <th>Name</th>
              <th>Author</th>
              <th>Publisher</th>
              <th></th>
            </tr> 
<form  action="add.php" method="POST">
<tr>
<td>
<input type="text" name="name" placeholder="Enter book's name" required> 
</td>
<td>
<input type="text" name="author" placeholder="Enter Author's name" required> 
</td>
<td>
<input type="text" name="publi" placeholder="Enter Publisher's name" required> 
</td>
<td>
<input type="submit" name="add" value="ADD" style="background-color: #9900ff; border-radius: 10px; 
        width: 100px; height: 40px; font-size: 15px; color: white;">
</td>
</tr>
</form>
       </table>
</div>
<script type="text/javascript">
  function del(ava,bookid) {
       var bid=Number(bookid);
       if (ava=="1") {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        };
        xmlhttp.open("POST", "del.php", true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("bid=" + bid);
      }
      else alert("Book cannot be removed as it is issued");
      document.location.reload(true);
}
  function remove(){
     document.getElementById('Z').style.display="block";
  }
  function cls(){
    document.getElementById('Z').style.display="none";
  }
</script>
<?php
function logout(){
  $conn->close();
  session_unset(); 
  session_destroy(); 
  header('Location: assign4.php');
}
?>
</body>
</html>