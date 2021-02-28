<?php  
 include 'clock.php';
 ?>  
<!DOCTYPE html>  
<html>
<head>
<a class="float-right" href="hotel.php"> <h1 style="color: blue;" align="right"><i>Back</i></h1> </a>
<br><br>
<a class="float-left" href="login.php"> <h1 style="color: blue;" align="left"><i>Home</i></h1> </a>

<link rel="stylesheet" type="text/css" href="roomcss.css">

		<!--BootStrap--> 
	<link rel="stylesheet" type="text/css"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<div class ="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6 login-center">
	<h2 style="color:white;">Room Info</h2>
	<form name ="Registration_form" action ="hotelregisteration.php" method="post">	

		<div class = "form-group">
		<label style="color:white;">Hotel Name</label>
		<input style="color:white;" type="text" name ="hname" class="form-control" required>
			</div>
			
		<div class = "form-group">
		<label style="color:white;">Price</label>
		<input style="color:white;" type="number" name ="price" class="form-control" required>
			</div>			
		<div class = "form-group">
		<label style="color:white;">Number of Rooms</label>
		<input style="color:white;" type="number" name ="num" class="form-control" required>
			</div>
			
			<div class = "form-group">
				<label style="color:white;">Room Type:</label>
		<select name="type">
	<option value="single">Single</option>
	<option value="double">Double</option>
	<option value="triple">Triple</option>
  </select> 
  </div>
		<button type="submit" class="btn btn-primary">Apply</button>		
	</form>
</div>
 </html> 	  
     
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
  
	 
