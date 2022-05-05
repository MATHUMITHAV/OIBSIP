<?php 
$dbconnect=mysqli_connect('localhost','id13963179_mathushruthi','n9qZ&c_(DZ6FBe?o','id13963179_submit');
 if($dbconnect->connect_error){
     echo $dbconnect->connect_error;
     die("Sorry db failed");}

?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="MATHUMITHA">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
<form action="submit.php"  class="login-box"  method="post">
<table>
<div class="textbox">
<tr>
    <td><i class="fas fa-user"></i></td>
    <td><input type="text" name="username" placeholder="Username"  value=""></td>
  </tr>
  </div>
 

<div class="textbox">
<tr>
    <td><i class="fas fa-mobile-alt"></i></td>

    <td><input type="phoneno" name="phoneno"  placeholder="phoneno"  value=""> </td>
  </tr>
</div>
 <tr>
 <td colspan="2">

 <input type="submit"name="submit" class="btn" value="Submit">
 </td>


</tr>
</center>

</table>

</form>



<?php
if(issest($_POST['submit']))
 {
 $username=$_POST['username'];
 $phoneno=$_POST['phoneno'];
 
 
 $sql="INSERT INTO users (username,phoneno) VALUES($username','$phoneno')";
 $re=$dbconnect->query($sql);
 if(!$re){
     
     
 }else{
     
     echo"<script> alert('welcome to mathu profile ')</script>";
     echo"<script> location.href='bio.php'</script>";
 }
}else{
    
echo"<script> alert('error ')</script>";
}

?>
</body>
</html><?php 
$dbconnect=mysqli_connect('localhost','id13963179_mathushruthi','n9qZ&c_(DZ6FBe?o','id13963179_submit');
 if($dbconnect->connect_error){
     echo $dbconnect->connect_error;
     die("Sorry db failed");}

?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="MATHUMITHA">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
<form action="submit.php"  class="login-box"  method="post">
<table>
<div class="textbox">
<tr>
    <td><i class="fas fa-user"></i></td>
    <td><input type="text" name="username" placeholder="Username"  value=""></td>
  </tr>
  </div>
 

<div class="textbox">
<tr>
    <td><i class="fas fa-mobile-alt"></i></td>

    <td><input type="phoneno" name="phoneno"  placeholder="phoneno"  value=""> </td>
  </tr>
</div>
 <tr>
 <td colspan="2">

 <input type="submit"name="submit" class="btn" value="Submit">
 </td>


</tr>
</center>

</table>

</form>



<?php
if(issest($_POST['submit']))
 {
 $username=$_POST['username'];
 $phoneno=$_POST['phoneno'];
 
 
 $sql="INSERT INTO users (username,phoneno) VALUES($username','$phoneno')";
 $re=$dbconnect->query($sql);
 if(!$re){
     
     
 }else{
     
     echo"<script> alert('welcome to mathu profile ')</script>";
     echo"<script> location.href='bio.php'</script>";
 }
}else{
    
echo"<script> alert('error ')</script>";
}

?>
</body>
</html>