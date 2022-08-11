<?php  

  if (isset($_POST['submit'])) {
  	
  	$plainPW = $_POST['password'];

  	echo $md5 = md5($plainPW)."<br/>";
  	echo strlen($md5);
  	echo "<br/>";
  	echo $shi1 = sha1($plainPW)."<br/>";
  	echo strlen($shi1);
  	echo "<br/>";
  	echo $rot13 = str_rot13($plainPW)."<br/>";
  	echo strlen($rot13);
  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Password Encryption</title>
</head>
<body>

		<center><h2>Password Encryption & Decryption</h2></center>
		<hr/><hr/>

		<form method="POST">

			Type Password:<input type="password" name="password">
			<input type="submit" name="submit" value="Send">
			

		</form>

</body>
</html>