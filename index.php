<?php
	
	session_start();
	
	require 'dbconfig/config.php';
	
?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body  style="background-color:#6495ED">

	<div id="main-wrapper">
	<center>
	<h2>
	LOGIN
	</h2>
	
	 


	</center>
	
	
	<form class="myform" action="index.php" method="post">
	<label><b>Username: </b></label><br>
	<input name="username" type="text" class="inputvalues" placeholder="Enter your username"  required /> <br>
	<label><b>Password:</b> </label><br>
	<input name="pass" type="password" class="inputvalues" placeholder="Enter your password" required /><br>
	
	<input name="login" type="submit" id="login_btn" value="Login"/> <br><br>
	
	<a href="register.php"><input type="button" id="register_btn" value="Register"/>
	
	</form>
	
	<?php
	
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$pass= $_POST['pass'];
		
		$query="SELECT * FROM userinfo WHERE userid='$username' AND pass='$pass'";
		
		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run)>0)
		{
			$row = mysqli_fetch_assoc($query_run);
			$_SESSION['username']=$row['userid'];
			$_SESSION['imglink']=$row['imglink'];
			header('location:homepage.php');
			
		}
		else
		{
			echo '<script type="text/javascript"> alert("Invalid Credentials!") </script>';
		}
			
	}
	
	?>
	
	</div>
</body>


</html>