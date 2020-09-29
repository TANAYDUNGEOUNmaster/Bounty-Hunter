<?php
	session_start();
	require 'dbconfig/config.php';
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body  style="background-color:#6495ED">

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