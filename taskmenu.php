<?php
	session_start();
	require 'dbconfig/config.php';
	
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
     
    <title>Task Menu</title>

    <link rel="stylesheet" href="css/style2.css" />
  </head>

 <body style="background-color:#6495ED">

	<div id="main-wrapper2">
	<center>
	<h2>
	Task Menu
	</h2>
	
	<h3>Post new tasks
	<?php 
		echo $_SESSION['username'] 
	?>
	!
	</h3>
	
 </center> 

<form class="myform" action="taskmenu.php" method="post">
	  
 
 
          
 
	 <a href="addtask.php"><input type="button" id="addt_btn" value="New Task" ; /> 

	 <a href=" viewtask.php"><input type="button" id="viewt_btn" value="Task History" style="float: right;/> 

 
 
<input name="logout" type="submit" id="logout_btn" value="Logout" style="float: center;" /> 
 
	 
	</form>
   <a href="homepage.php"><input type="button" id="home_btn" value="Home"  />  
   
 </body>
</html>
 
 

 