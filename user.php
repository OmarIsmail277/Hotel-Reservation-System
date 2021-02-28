<?php
session_start();
if(!isset($_SESSION['username'])) {
	header('location:login.php');	
}
include 'clock.php';

?>

<html>
<head>
<title> Home Page </title>

<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
	>



</head>

<body>

<div class="container">


<a class="float-right" href="logout.php"> <h3>logout<h3> </a>
<a class="float-left" href="reserve.php"> <h3>Go To Reserve!<h3> </a>


	<h1 style = "color:white;"> Welcome Back User <?php echo $_SESSION['username'] ; ?> !</h1>

		
		</div>
</body>


</html>
