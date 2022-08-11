<?php 

	if (isset($_GET['logout'])) {
		
		echo "<span style='color:green'>You're successfully logoutted.</span>";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index.php</title>
</head>
<body>

		<center><h1>Welcome to Wesa.edu.af</h1></center>
		<hr/><hr/>

		<?php 

			session_start();

			$_SESSION['try'] = 0;

		?>
		<div style="float: right;">
			<a href="login.php">login</a>
		</div>

</body>
</html>