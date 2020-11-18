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
<?php require "templates/header.php"; ?>
 <center><h2 style="color: white;font-size: 50px; font-family: 'Alfa Slab One';text-align: left;">Bounty History</h2></center> <br>
<?php
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h6>Results for date <?php echo escape($_POST['date']); ?></h6>

<style>
table {
  border-collapse: collapse;
  width: 100%;
  background-color: white;
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
  <th>State</th>
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
<td><?php echo escape($row["state"]); ?></td>
<td><?php echo escape($row["city"]); ?></td>
<td><?php echo escape($row["money"]); ?></td>
<td><?php echo escape($row["status"]); ?></td> 
      </tr>
    <?php } ?>
      </tbody>
  </table><br>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['date']); ?>.
  <?php }
} ?>
<style type="text/css">
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
</style>
    
<div class="card" style="width: 100%;  color: white; background-color: grey;background-repeat: no-repeat;background-attachment: fixed;
background-size: cover; ">

  <!-- Card body -->
  <div class="card-body">
    <br><br><form class="myform" action="viewtask.php" method="post"  style="color: white;"   enctype="multipart/form-data">

 <div class="md-form">
         <label><b>UserID:</label><br>
    	<input name="t_userid" type="text" class="form-control"
        placeholder="Enter your UserID"  required/>
  </div>        

 <div class="md-form">
    	 <label><b>Date:</label><br>
        <input type="date" id="date" name="date" class="form-control" required><br>
        </div>
    	<br><input type="submit" name="submit" class="button b1" value="View Results">
    </form>
    <br>

</div>
</div>






    
   
 
    <?php include "templates/footer.php"; ?>