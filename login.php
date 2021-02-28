<html>
<head>
	<title>Hotel Reservation System</title>
	<script src="./script.js"></script> 
<link rel="stylesheet" type="text/css" href="style.css">
		<!--BootStrap--> 
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<iframe scrolling="no" frameborder="no" clocktype="html5" 
style="overflow:hidden;border:0;margin:0;padding:0;width:412px;height:54px;
"src="https://www.clocklink.com/html5embed.php?clock=036&timezone=Egypt_Cairo&color=blue&size=412&Title=&Message=&Target=&From=2018,1,1,0,0,0&Color=blue">
</iframe>	
<div style="text-align:center;"><h2 style="color:blue;">Hotel Reservation System</h2>
</div>
</head>
<body>
<div class ="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login-left">
	<h2 style="color:white;">Login Here</h2>
	<form action ="validation.php" method="post" >
		<div class = "form-group">
		<label style="color:white;">Username</label>
		<input style="color:white;" type="text" name ="user" class="form-control" required>
			</div>	
		<div class = "form-group">
		<label style="color:white;">Password</label>
		<input style="color:white;" type="password" name ="password" class="form-control" required>
			</div>
		<div class = "form-group">
		<label style="color:white;">Login as: </label>
		<select name="usert">
    <option value="admin">Admin</option>
    <option value="user">User</option>
	<option value="owner">Owner</option>

  </select> 
			</div>
<hr color="">
			<button type="submit" class="btn btn-primary">Login</button>		
	</form>
</div>

	<div class="col-md-6 login-right">
	<h2 style="color:white;"> Register Here</h2>
	<form name ="Registration_form" action ="registeration.php" method="post" onsubmit="return validate_email()">	
			<div class = "form-group">
		<label style="color:white;">Email</label>
		<input style="color:white;" type="text" name ="emailaddress" class="form-control" >
			</div>
			
		<div class = "form-group">
		<label style="color:white;">Username</label>
		<input style="color:white;" type="text" name ="user" class="form-control" >
			</div>
			
		<div class = "form-group">
		<label style="color:white;">Password</label>
		<input style="color:white;" type="password" name ="password" class="form-control" >
			</div>
		<div class = "form-group">
		<label style="color:white;">Register as: </label>
		<select name="usert">
    <option value="user">User</option>
	<option value="owner">Owner</option>

  </select> 
			</div>
			
		
<hr color="white">

			<button type="submit" class="btn btn-primary">Register</button>		
	</form>
</div>
</div>

</div>
</body>
</html>