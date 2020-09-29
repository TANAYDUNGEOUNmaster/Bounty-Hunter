<?php 
if (isset($_POST['submit'])) {
  try {
    require "config.php";
    require "common.php"; 

    $connection = new PDO($dsn, $username, $password, $options);
        // fetch data code will go here
    
$sql = "SELECT taskinfo.taskid,huntid,h_userid,fname,cntnumber,email,w_desc,date,status
FROM taskinfo
INNER JOIN huntinfo
ON huntinfo.taskid=taskinfo.taskid
INNER JOIN userinfo
ON huntinfo.h_userid=userinfo.userid
WHERE t_userid= :t_userid  ";

 
$t_userid = $_POST['t_userid'];

$statement = $connection->prepare($sql);
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
  <th>Hunt ID</th>
  <th>UserID</th>
  <th>fname</th>
  <th>cntnumber</th>
  <th>email</th>
  <th>w_desc</th>
  <th>date</th>
  <th>status</th>
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
      <tr>
<td><?php echo escape($row["taskid"]); ?></td>
<td><?php echo escape($row["huntid"]); ?></td>
<td><?php echo escape($row["h_userid"]); ?></td>
<td><?php echo escape($row["fname"]); ?></td>
<td><?php echo escape($row["cntnumber"]); ?></td> 
<td><?php echo escape($row["email"]); ?></td> 
<td><?php echo escape($row["w_desc"]); ?></td> 
<td><?php echo escape($row["date"]); ?></td> 
<td><?php echo escape($row["status"]); ?></td> 
      </tr>
    <?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['t_userid']); ?>.
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
     
);

$sql ="UPDATE taskinfo
       SET status='DONE'
       where taskid= :taskid" ; 

$statement = $connection->prepare($sql);
$statement->execute($new_hunt);
 
 } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>
 
<?php if (isset($_POST['add']) && $statement) { ?>Status of Task ID
  <?php echo escape($_POST['taskid']); ?> successfully changed.
<?php } ?>

   
    <h4>Find the hunter's info-></h4>
 
    <form class="myform" action="gethunterinfo.php" method="post"     enctype="multipart/form-data">

         <label><b>UserID:</label><br>
    	<input name="t_userid" type="text" class="inputvalues" 
        placeholder="Enter your UserID"   />
         <br> 

    	 
    	<input type="submit" name="submit" value="View Results">
    </form><br>

<h4>Change task status -></h4>
         
 
       <label><b>Choose taskID:</label>
    	<input type="text" id="taskid" name="taskid" class="inputvalues"                 placeholder="Enter completed task Task ID "    /> <br>
        <input type="submit" name="add" value="change status">
    </form>


    <a href="taskmenu.php">Back to home</a>

    <?php include "templates/footer.php"; ?>