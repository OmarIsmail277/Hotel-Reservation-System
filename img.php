 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body> 
  	<form  action ="imgREG.php" method="post" enctype="multipart/form-data">	
	  
           <div class="container" 	style="width:500px;">  
		   <div class = "form-group">
				<label style="color:white;">rating:</label>
		<select name="rating">
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
  </select> 
  </div>

                <h5 align="left">Image</h5>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="ss" id="image" />  
                     <br />  
                     <input type="submit" name="Apply" id="Apply" value="Apply" class="btn btn-info" />  
                </form>  
           </div>  
		   </form>
      </body>  
 </html>  
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