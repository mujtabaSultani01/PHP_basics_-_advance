<?php 
	session_start();
	$flag = 0;

	if (isset($_POST['submit'])) {
		
		$_SESSION['try'] = $_SESSION['try'] + 1;

		if ($_SESSION['try'] > 3) {
			
			echo "<span style='color:red'>Login Form locked!!!</span>";
			$flag = 1;
		}

		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == "Ahmad" && $password == "ahmad@123") {
			
			if ($_POST['remember'] == "on") {
				
				setcookie("uname", $username, time() + 3600);
				setcookie("pass", $password, time() + 3600);
			}
			  $_SESSION['login'] = $username;
			  header("location:home.php");

		}
		 else{
		     	
		  echo "<span style='color:red'>Opps! Username or Password is incorrect! Try again!</span>";
		
		}


	}
		

			$uname = "";
			$pass = "";

		if(isset($_COOKIE['uname'])){

			$uname = $_COOKIE['uname'];
			$pass = $_COOKIE['pass'];
		}
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
</head>
<body>

<h2><center>Login Form</center></h2>
<hr/>
	<center>

		<?php 

		if(isset($_GET['nologin'])){

		echo "<span style='color:red'>Login First!</span>";
	    }

		   if($flag != 1){

		?>
		<table>
		
		<form method="POST" action="" enctype="multipart/form-data">
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username" value="<?php echo $uname; ?>"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" value="<?php echo $pass ?>"></td>
			</tr>
			<tr>
				<td>Keep me sign in</td>
				<td><input type="checkbox" name="remember"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</form>

	</table>
<?php } ?>
</center>

</body>
</html>