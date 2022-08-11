<?php 

	if (isset($_POST['ip'])) {
		
		$ip = $_POST['ip'];

		if (filter_var($ip, FILTER_VALIDATE_IP)) {
			echo "inserted IP address is correct.";
		}
		else{
			echo "<span style='color:red'>Opps! inserted IP address is incorrect!!!</span>";
		}
	}

	if (isset($_POST['money'])) {
		
		$money = $_POST['money'];

		$res = filter_var($money, FILTER_SANITIZE_NUMBER_FLOAT);

		echo "Correct output after Sanitization filter process is: ".$res;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Filters</title>
</head>
<body>

	<h1 align="center">PHP Filters</h1>
	<hr/><hr/>

	<table align="center">
		
		<form method="POST" action="" enctype="multipart/form-data">

			<tr>
				<td>Type IP address:</td>
				<td><input type="text" name="ip" placeholder="Type ip address..."></td>
							
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</form>
	</table>
   <hr/><hr/>
	<table align="center">
		
		<form method="POST" action="" enctype="multipart/form-data">

			<tr>
				<td>Type a total:</td>
				<td><input type="text" name="money" placeholder="type your total..."></td>
							
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</form>
	</table>
	


</body>
</html>