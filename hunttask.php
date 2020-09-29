<?php 
if (isset($_POST['submit'])) {
  try {
    require "config.php";
    require "common.php";

    $connection = new PDO($dsn, $username, $password, $options);
        // fetch data code will go here
    
$sql = "SELECT *
FROM taskinfo
WHERE city = :city AND status='UNDONE'";

$city = $_POST['city'];

$statement = $connection->prepare($sql);
$statement->bindParam(':city', $city, PDO::PARAM_STR);
$statement->execute();

$result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>
<?php require "templates/header2.php"; ?>

<?php
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Results</h2>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}

th {
  background-color: #00008B;
  color: white;
}
</style>


    <table>
      <thead>
<tr>
  <th>Task ID</th>
  <th>User ID</th>  
  <th>Work desription</th>
  <th>Date</th>
  <th>City</th>
  <th>Money</th>
   
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["taskid"]); ?></td>
<td><?php echo escape($row["t_userid"]); ?></td>
 <td><?php echo escape($row["w_desc"]); ?></td>
<td><?php echo escape($row["date"]); ?></td>
<td><?php echo escape($row["city"]); ?></td>
<td><?php echo escape($row["money"]); ?></td>
 
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>

			 
  <b> > No results found for <?php echo escape($_POST['city']); ?>.
  <?php }
} ?>



<?php
if (isset($_POST['add'])) {
  require "config.php";
  require "common.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);
    // insert new user code will go here
    $new_hunt = array(
    "taskid"    => $_POST['taskid'],
    "h_userid"    => $_POST['h_userid']
);

$sql = sprintf(
    "INSERT INTO %s (%s) values (%s)",
    "huntinfo ",
    implode(", ", array_keys($new_hunt)),
    ":" . implode(", :", array_keys($new_hunt))
);

$statement = $connection->prepare($sql);
$statement->execute($new_hunt);
 
 } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>
 
<?php if (isset($_POST['add']) && $statement) { ?>Task ID
  <?php echo escape($_POST['taskid']); ?> successfully added.
<?php } ?>
  




<h4>Find tasks based on location -></h4>

    <form method="post">
    	<label><b>City:</label><br>
    	<input type="text" id="city" name="city"  class="inputvalues"                 placeholder="Enter City Name"   /> <br>

    	<input type="submit" name="submit" value="View Results"><br><br>

<h4>Select the task you want to hunt -></h4>
       <label><b>UserID:</label><br>
    	<input name="h_userid" type="text" class="inputvalues" 
        placeholder="Enter your UserID" />
         <br> 
 
       <label><b>Choose task:</label>
    	<input type="text" id="taskid" name="taskid" class="inputvalues"                 placeholder="Enter Task ID you want to hunt"    /> <br>
        <input type="submit" name="add" value="Hunt this task">
    </form>

    <br><br><a href="huntmenu.php">Back to home</a>

    <?php include "templates/footer2.php"; ?>