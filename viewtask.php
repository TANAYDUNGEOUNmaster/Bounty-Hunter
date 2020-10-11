<?php 
if (isset($_POST['submit'])) {
  try {
    require "config.php";
    require "common.php";

    $connection = new PDO($dsn, $username, $password, $options);
        // fetch data code will go here
    
$sql = "SELECT *
FROM taskinfo
WHERE date = :date And t_userid= :t_userid AND status='UNDONE' ";

$date = $_POST['date'];
$t_userid = $_POST['t_userid'];

$statement = $connection->prepare($sql);
$statement->bindParam(':date', $date, PDO::PARAM_STR);
$statement->bindParam(':t_userid', $t_userid, PDO::PARAM_STR);
$statement->execute(); 

$result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>
<?php require "templates/header4.php"; ?>

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
  <th>task ID</th>
  <th>Work description</th>
  <th>City</th>
  <th>Money</th>
  <th>Status</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["taskid"]); ?></td>
<td><?php echo escape($row["w_desc"]); ?></td>
<td><?php echo escape($row["city"]); ?></td>
<td><?php echo escape($row["money"]); ?></td>
<td><?php echo escape($row["status"]); ?></td> 
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['date']); ?>.
  <?php }
} ?>

    <h2>Find your posted tasks based on date</h2>

    <form class="myform" action="viewtask.php" method="post"     enctype="multipart/form-data">

         <label><b>UserID:</label><br>
    	<input name="t_userid" type="text" class="inputvalues" 
        placeholder="Enter your UserID"  required/>
         <br> 

    	 <label><b>Date:</label><br>
        <input type="date" id="date" name="date" required><br>
    	<br><input type="submit" name="submit" value="View Results">
    </form>
    <br>








    
   <br> <a href="gethunterinfo.php">Get hunted task info</a><br>
<br><a href="taskmenu.php">Back to home</a>
    <?php include "templates/footer.php"; ?>