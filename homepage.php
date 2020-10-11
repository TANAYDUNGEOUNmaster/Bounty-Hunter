<?php
	session_start();
	require 'dbconfig/config.php';
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>
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

<body >
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
	HOMEPAGE
	</h2>
	
	<h3>Welcome
	<?php 
		echo $_SESSION['username'] 
	?>
	!
	</h3>
	
	
	<?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'">'; ?>
	 
	
	<?php
	
	?>
	 
	 
	
	 
	
	 
	</center>
	
	
	
	<form class="myform" action="homepage.php" method="post">
	  
        
 
	 <a href=" taskmenu.php"><input type="button" id="post_btn" value="Post Task"  /> 

	 <a href=" huntmenu.php"><input type="button" id="hunt_btn" value="Hunt Task" style="float: right;/> 
 
	<input name="logout" type="submit" id="logout_btn" value="Logout" style="float: center;" /> 
	</form>
	<input name="logout" type="submit" id="logout_btn" value="Logout" style="float: center;" /> 
	<?php
		if(isset($_POST['logout']))
		{
			session_destroy();
			header('location:index.php');
		}
	?>
	
	</div>
	
	
</body>


</html>