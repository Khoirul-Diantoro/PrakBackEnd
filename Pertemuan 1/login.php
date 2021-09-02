<?php 
error_reporting(0);
session_start(); 
$username=$_SESSION['username'];
$password=$_SESSION['password'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>

<form  action="proses.php" method="POST">
	<div class="login-card">
    <h1>Log-in</h1><br>
  <form>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
 </form>
    

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

</body>
</html>