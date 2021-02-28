<?php 
include 'clock.php';
?>
<!DOCTYPE html>  
<html>
<head>
<a class="float-right" href="login.php"> <h1 style="color: red;" align="right"><i>Back</i></h1> </a>

<link rel="stylesheet" type="text/css" href="style.css">

		<!--BootStrap--> 
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	
	

</head>
<body>
<div class ="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login-center">
	<h2 style="color:white;">Hotel Info</h2>
	<form  action ="hotelregisteration.php" method="post" enctype="multipart/form-data">	

		<div class = "form-group">
		<label style="color:white;">Hotel Name</label>
		<input style="color:white;" type="text" name ="hname" class="form-control" required>
			</div>
		<div class = "form-group">
		<label style="color:white;">Email</label>
		<input style="color:white;" type="email" name ="emailaddress" class="form-control">
			</div>			
		<div class = "form-group">
		<label style="color:white;">Location</label>
		<input style="color:white;" type="text" name ="location" class="form-control" required>
			</div>
			<div class = "form-group">
		<label style="color:white;">Hotline</label>
		<input style="color:white;" type="number" name ="hotline" class="form-control" required>
			</div>
			<div class = "form-group">
				<label style="color:white;">Stars:</label>
		<select name="stars">
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
  </select> 
  </div>
  <div class = "form-group">
				<label style="color:white;">Rating:</label>
			<select name="rating">
	<option value="3">3.0</option>
	<option value="4">4.0</option>
	<option value="5">5.0</option>
  </select> 
  </div>
    <div class = "form-group">
				<label style="color:white;">Image:</label>
                     <input type="file" name="ss" id="image" />  
				<br>
           <input type="submit" name="Apply" id="Apply" value="Apply" class="btn btn-info" />  
   </div>

	</form>
</div>
</body>
 </html> 
 
 
  
 
