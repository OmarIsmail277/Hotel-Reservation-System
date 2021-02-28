<?php
session_start();


//$imgname=$_POST['ss'];
	
//$h1 = " select * from hotel where name='$hname'";
//$h2 = " select * from hotel where email='$mail'";
//$h3 = " select * from hotel where hotline='$hot'";

/*$result1 = mysqli_query($con,$h1);
$result2 = mysqli_query($con,$h2);
$result3 = mysqli_query($con,$h3);

$num1 = mysqli_num_rows($result1);
$num2 = mysqli_num_rows($result2);
$num3 = mysqli_num_rows($result3);

if($num1==1) {
	echo " Hotel Name is already taken";
}
else if($num2==1) {
	echo "email is already taken";
}
else if($num3==1) {
	echo "Hotline is already taken";}*/



	//$reg = " insert into hotel(name,email,hotline,location,stars,rating) values ('$hname','$mail','$hot','$loc','$st','$rate')";
	//mysqli_query($con,$reg);
	$con = mysqli_connect("localhost", "root", "", "lab4");

	if(isset($_POST["Apply"]))  
 {  
$hname =$_POST['hname'];
$mail =$_POST['emailaddress'];
$hot = $_POST['hotline'];
$loc =$_POST['location'];
$st=$_POST['stars'];
$rate = $_POST['rating'];
      $file = addslashes(file_get_contents($_FILES["ss"]["tmp_name"]));  
	//$query = "UPDATE hotel SET  imgg = '$file' WHERE hname = '$hname' ";
	$reg = " insert into hotel(name,email,hotline,location,stars,rating,imgg) values ('$hname','$mail','$hot','$loc','$st','$rate','$file')";

      if(mysqli_query($con, $reg))  
      {  
  		header('location:room.php');

         //  echo '<script>alert("Image Inserted into Database")</script>';
		   
      }  
 }    
  
 

	//header('location:room.php');
	//	echo"Registeration  Sucessful! Welcome! :)";
?>
<script>  
 $(document).ready(function(){  
      $('#Apply').click(function(){  
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