<?php

	include "dbCon.php";

	  $id = $_GET['id'];

	  $resu = mysqli_query($con, "DELETE FROM users WHERE id = $id");

	  if($resu){

	  	 header("location:users.php");
	  }
	  else{

	  	 echo "<span style='color:red'>Opps!!!, something went wrong! Try again!</span>";
	  }
	

?>