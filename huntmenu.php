<?php
	session_start();
	require 'dbconfig/config.php';
	
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
     
    <title>Hunt Menu</title>

    <link rel="stylesheet" href="css/style2.css" />
  </head>

 <body style="background-color:#6495ED">

	<div id="main-wrapper2">
	<center>
	<h2>
	Hunt Menu
	</h2>
	
	<h3>Hunt new tasks
	<?php 
		echo $_SESSION['username'] 
	?>
	!
	</h3>
	
 </center> 

<form class="myform" action="huntmenu.php" method="post">
	  
         
 
	 <a href=" hunttask.php"><input type="button" id="newt_btn" value="Hunt Task"  /> 

	 <a href="viewhunt.php"><input type="button" id="viewh_btn" value="Hunt History" style="float: right;/> 
         
 

	<input name="logout" type="submit" id="logout_btn" value="Logout" style="float: center;" /> 
	</form> 
<a href="homepage.php"><input type="button" id="home_btn" value="Home"  /> 
 </body>
</html>
 
 

 