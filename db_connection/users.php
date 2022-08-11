<?php 
  include 'dbCon.php';

  	$result = mysqli_query($con, "SELECT * FROM users");

  	$rows = mysqli_fetch_assoc($result);

  	//print_r($rows);

  	echo "<h1 align='center'>Users displaying Form</h1><hr/><hr/>";

  		if (isset($_GET['inserted'])) {
  			echo "<span style='color:green'>record inserted...</span>";
  		}
  		if (isset($_GET['updated'])) {
  			echo "<span style='color:green'>record Updated...</span>";
  		}

  	echo "<br><a align='left' href='new.php'>insert new record</a>";
  	echo "<table border='1' align='center'>
  		<p align='center' style='color:green;'>Users</p>
  		<tr>
  			<td>ID</td>
  			<td>Username</td>
  			<td>Email</td>
  			<td>Address</td>
  			<td>Update</td>
  			<td>Delete</td>
  		</tr>
  	";
  	  do{
  	  	?>

  	  		<tr>
  	  			<td><?php echo $rows['id']; ?></td>
  	  			<td><?php echo $rows['name']; ?></td>
  	  			<td><?php echo $rows['email']; ?></td>
  	  			<td><?php echo $rows['address']; ?></td>
  	  			<td><a href="usersUpdate.php?id=<?php echo $rows["id"]; ?>" class="icon_check_alt2">update</a></td>
  	  			<td><a href="usersDelete.php?id=<?php echo $rows["id"]; ?>">delete</a></td>
  	  		</tr>

  	 <?php  }while($rows=mysqli_fetch_assoc($result));

  	  echo "</table>";


?>