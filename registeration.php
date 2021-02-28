<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'lab4');

$id =$_POST['userid'];
$name =$_POST['user'];
$mail =$_POST['emailaddress'];
$passw = $_POST['password'];
$encrypted_pw= md5($passw);
$type = $_POST['usert'];

$n = " select * from users where username='$name'";
$h = " select * from hotel where username='$name'";


$result1 = mysqli_query($con,$n);
$result2 = mysqli_query($con,$h);


$num1 = mysqli_num_rows($result1);
$num2 = mysqli_num_rows($result2);



if($num1==1) {
	echo " Name  is already taken";
}
if($num2==1) {
	echo "Hotel Name  is already taken";
}


else {
	//$regdate = date("Y/m/d");
	$reg = " insert into users(email,username,pword,usertype) values ('$mail','$name','$encrypted_pw','$type')";
	$reg1 = "UPDATE Users SET registration_date = NOW() WHERE username = '$name' LIMIT 1";

	mysqli_query($con,$reg);

	mysqli_query($con,$reg1);
header('location:welcome.php');
	//	echo"Registeration  Sucessful! Welcome! :)";
	
}

?>