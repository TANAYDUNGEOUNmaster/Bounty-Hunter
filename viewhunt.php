<?php 
if (isset($_POST['submit'])) {
  try {
    require "config.php";
    require "common.php";

    $connection = new PDO($dsn, $username, $password, $options);
        // fetch data code will go here
    
$sql = "SELECT huntid,huntinfo.taskid,fname,cntnumber,email,w_desc,date,city,money,status
FROM huntinfo
INNER JOIN taskinfo
ON huntinfo.taskid=taskinfo.taskid
INNER JOIN userinfo
ON taskinfo.t_userid=userinfo.userid
WHERE h_userid= :h_userid  ";


$h_userid = $_POST['h_userid'];

$statement = $connection->prepare($sql);

$statement->bindParam(':h_userid', $h_userid, PDO::PARAM_STR);
$statement->execute(); 

$result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>
<?php require "templates/header3.php"; ?>

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
  <th>Hunt ID</th>
  <th>Task ID</th>
  <th>fname</th>
  <th>cntnumber</th>
  <th>email</th>
  <th>w_desc</th>
  <th>date</th>
  <th>city</th>
  <th>money</th>
  <th>status</th> 
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["huntid"]); ?></td>
<td><?php echo escape($row["taskid"]); ?></td>
<td><?php echo escape($row["fname"]); ?></td>
<td><?php echo escape($row["cntnumber"]); ?></td>
<td><?php echo escape($row["email"]); ?></td>
<td><?php echo escape($row["w_desc"]); ?></td>
<td><?php echo escape($row["date"]); ?></td>
<td><?php echo escape($row["city"]); ?></td>
<td><?php echo escape($row["money"]); ?></td>
<td><?php echo escape($row["status"]); ?></td>
 
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['h_userid']); ?>.
  <?php }
} ?>

    <h2>Find your choosen tasks-></h2>

    <form class="myform" action="viewhunt.php" method="post"     enctype="multipart/form-data">

         <label><b>UserID:</label><br>
    	<input name="h_userid" type="text" class="inputvalues" 
        placeholder="Enter your UserID"  required/>
         <br> 

    	 
    	<br><input type="submit" name="submit" value="View Results">
    </form>

    <a href="huntmenu.php">Back to home</a>

    <?php include "templates/footer2.php"; ?>