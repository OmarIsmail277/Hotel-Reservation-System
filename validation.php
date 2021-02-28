<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'lab4');

$id =$_POST['userid'];
$name =$_POST['user'];
$mail =$_POST['emailaddress'];
$passw = $_POST['password'];
$passw = md5($passw);
$type = $_POST['usert'];

$s = " select * from users where username='$name' && pword='$passw' && usertype='$type' ";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
	
	$_SESSION['username'] = $name;
	if($type == "admin")
	{
	header('location:admin.php');
	$reg2 = "UPDATE Users SET last_login_date = NOW() WHERE username = '$name' LIMIT 1";
	mysqli_query($con,$reg2);
	}
	else if($type=="owner"){
		
		header('location:owner.php');
	$reg2 = "UPDATE Users SET last_login_date = NOW() WHERE username = '$name' LIMIT 1";
	mysqli_query($con,$reg2);

	}
	else{
		
		header('location:user.php');
	$reg2 = "UPDATE Users SET last_login_date = NOW() WHERE username = '$name' LIMIT 1";
	mysqli_query($con,$reg2);

	}
}
else {
	header('location:invalid.php');
}

?>