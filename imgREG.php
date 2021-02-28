	<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  

 if(isset($_POST["Apply"]))  
 {   $rate = $_POST['rating'];

      $file = addslashes(file_get_contents($_FILES["ss"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name,rating) VALUES ('$file','$rate')";  
      if(mysqli_query($connect, $query))  
      {  
  		header('location:img.php');

           echo '<script>alert("Image Inserted into Database")</script>';
		   
      }  
 }  
 ?> 