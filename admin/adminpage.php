<?php
@include('connection.php');
session_start();

if(isset($_SESSION['adminname']))
{
	header('location:login.php');
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Admin page </title>
	
</head>
<body>
	<div class="container">
	<div class="content">
	<h3> Hi, <span> Admin </span></h3>
	<h1>welcome <span></span> </h1>
	<p> This is An Admin Page </p>
	<a href="login.php" class="btn">login </a>
	<a href="register.php" class="btn">register</a>
	<a href="logout.php" class="btn">logout </a>


</body>
</html>