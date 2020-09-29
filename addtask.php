<?php
     session_start();
?>
<?php
if (isset($_POST['submit'])) {
  require "config.php";
  require "common.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);
    // insert new user code will go here
    $new_task = array(
    
   "t_userid"  => $_POST['t_userid'],
   "w_desc"  => $_POST['w_desc'],
   "date"    => $_POST['date'],
   "city"    => $_POST['city'],
   "money"   => $_POST['money']
    
);

$sql = sprintf(
    "INSERT INTO %s (%s) values (%s)",
    "taskinfo",
    implode(", ", array_keys($new_task)),
    ":" . implode(", :", array_keys($new_task))
);

$statement = $connection->prepare($sql);
$statement->execute($new_task);
 
 } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }

}
?>
<?php include "templates/header.php"; ?>
<?php if (isset($_POST['submit']) && $statement) { ?>
<?php echo "  Task successfully added.";
} ?>
   
 
 
    <form class="myform" action="addtask.php" method="post"     enctype="multipart/form-data">

    	 <label><b>UserID:</label><br>
    	<input name="t_userid" type="text" class="inputvalues" 
        placeholder="Enter your UserID"  required/>
         <br> 
    	 
        <label><b>Work Description:</label><br>
    	<input name="w_desc" type="text" class="inputvalues" 
        placeholder="Describe the task"  required/>
         <br> 

        <label><b>Date:</label><br>
        <input type="date" id="date" name="date" required><br>
         
       <label><b>City: </b> </label> <br>
	<input name="city" type="text" class="inputvalues"                         placeholder="Enter City name"  required /> <br>

    	<label><b>Money: </b> </label> <br>
	<input name="money" type="text" class="inputvalues"                         placeholder="Enter payment amount"  required /> <br>

    	 
    	<br><input type="submit" name="submit" id="sub_btn" value="Submit" style="float: left;><br><br>
     
  
<br><a href="taskmenu.php"></a>
</form>
<br><br><a href="taskmenu.php">Back to home</a>
 
 
    <?php include "templates/footer.php"; ?>