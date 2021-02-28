<?php
session_start();
if(!isset($_SESSION['username'])) {
	header('location:login.php');	
}
include 'clock.php';

?>

<html>
<head>
<title> Hotel Owner </title>

<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>

<div class="container">


<a class="float-right" href="logout.php"> <h3>logout<h3> </a>
<a class="float-left" href="hotel.php"> <h3>Apply for adding of your Hotel Now!<h3> </a>

	<h1 style = "color:white;"> Welcome Back Owner <?php echo $_SESSION['username'] ; ?> !</h1>

		
		</div>
</body>


</html>
