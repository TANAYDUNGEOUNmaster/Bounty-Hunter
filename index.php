<?php
	
	session_start();
	
	require 'dbconfig/config.php';
	
?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<link rel="stylesheet" href="css/style.css">

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
<br>

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