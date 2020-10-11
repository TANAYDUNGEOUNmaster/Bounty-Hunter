<?php
	session_start();
	require 'dbconfig/config.php';

   
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<link rel="stylesheet" href="css/style.css">

<!--
<script type="text/javascript">

	function PreviewImage()
	{
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
		
		oFReader.onload = function (oFREvent)
		{
			document.getElementById("uploadPreview").src = oFREvent.target.result;
		};
	};
	
</script>

-->
<style>
body{

background-image: url(https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>

</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
  <a class="navbar-brand" href="project.php">Bounty Hunter</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    
    <ul class="nav navbar-nav navbar-right">
    	<li class="nav-item">
        <a class="nav-link" href="index.php">LOGIN</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="register.php">SIGN UP</a>
      </li>
    </ul>
  </div>
</div>
</nav>
<br>
<br>
<br>

	<div id="main-wrapper2">
	<center>
	<h2>
	Registration Form
	</h2>
	
	<div>
	<?php
		if(isset($_POST['signup_btn']))
		{
			//echo '<script type="text/javascript"> alert("Form Submitted Successfully") </script>';
			
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$age = $_POST['age'];
			$gen = $_POST['gender'];
			$cntnumber = $_POST['cntnumber'];
			$email = $_POST['email'];
			$aadhar = $_POST['aadhar'];
			
			$userid = $_POST['userid'];
			$pass = $_POST['pass'];
			$cpass =$_POST['cpass'];
			
			 
			
			if($pass==$cpass)
			{
				$query= "SELECT * FROM userinfo WHERE userid= '$userid' ";
				
				$query_run=mysqli_query($con,$query);
				 
				if(mysqli_num_rows($query_run)>0)
				{
						echo '<script type="text/javascript"> alert("Username already exists,try another name") </script>';
				}
				else
                                { 
				 
					$query="INSERT INTO userinfo VALUES('$fname','$lname','$age','$gen','$cntnumber','$email','$aadhar','$userid','$pass' )";
					$query_run= mysqli_query($con,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User Registered!Go to Login page to login!") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!") </script>';
					}
					
					
					
					
				}
			}
			else{
				echo '<script type="text/javascript"> alert("Error!Password and confirm password do not match!") </script>';
		
			}
		
		}
	
	
	?>
	</div>
	
	
	


	</center>
	
	
	<form class="myform" action="register.php" method="post" enctype="multipart/form-data">
	
	<label><b>First name: </b> </label> <br>
	<input name="fname" type="text" class="inputvalues" placeholder="Enter your First name"  required /> <br>
	
	<label><b>Last name: </b></label> <br>
	<input name="lname" type="text" class="inputvalues" placeholder="Enter your Last name" required /> <br>
	
	<label><b>Age:</b> </label> <br>
	<input name="age" type="number" class="inputvalues" placeholder="Enter your age" required /> <br>
	
	<label><b>Gender: </b> </lable>
	<input name="gender" type="radio" class="radiobtn" value="male" checked required>Male
	<input name="gender" type="radio" class="radiobtn" value="female" required>Female
	<input name="gender" type="radio" class="radiobtn" value="others" required>Others<br>
	
	<label><b>Contact Number:</b> </label><br>
	<input name="cntnumber" type="number" class="inputvalues" placeholder="Enter your contact number"/> <br>
	
	<label><b>Email Id: </b></label><br>
	<input name="email" type="text" class="inputvalues" placeholder="Enter your email id" required /> <br>
	
	<label><b>Aadhar number:</b> </label><br>
	<input name="aadhar" type="number" class="inputvalues" placeholder="Enter your Aadhar number" required /> <br>
	
	
	
	<label><b>Username:</b> </label><br>
	<input name="userid" type="text" class="inputvalues" placeholder="Enter your username"  required /> <br>
	<label><b>Password:</b> </label><br>
	<input name="pass" type="password" class="inputvalues" placeholder="Enter your password" required  /><br>
	<label><b>Confirm Password:</b> </label> <br>
	<input name="cpass" type="password" class="inputvalues" placeholder="Confirm your password" required /><br><br>
	
	 
	
	
	
	<input name="signup_btn" type="submit" id="signup_btn" value="Register"/> <br><br>
	
	<a href="index.php"><input name="backlg_btn" type="button" id="backlg_btn" value="Back"/>
	
	</form>
	
	
	
	
	
	</div>
</body>


</html>