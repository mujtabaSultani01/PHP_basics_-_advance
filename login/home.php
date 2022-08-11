<?php    

	session_start();

	if (!isset($_SESSION['login'])) {

		header("location:login.php?nologin=true");
			
	}
	echo "Welcome Mr. ".$_SESSION['login'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
</head>
<body>

	<center><h2>Welcome to sama.edu.af</h2></center>
	<hr/>

	<div style="float: right;">
		
		<a href="logout.php">logout</a>

	</div>
</body>
</html>