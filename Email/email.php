<?php  

	if (isset($_GET['sent'])) {

		echo "<span style='color:green'>Email has been sent succesfully</span>";
	}
	if (isset($_GET['notSent'])) {

		echo "<span style='color:red'>Opps!!! Email has been filled... try again.</span>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email Form</title>
</head>
<body>

	<center><h1>Email Form</h1></center>
	<hr/><hr/>

<table align="center">
	<form method="POST" action="send.php">

		
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
			<td>
			<?php 
			   if (isset($_GET['usernameEmpty'])) {
		       echo "<center><span style='color:red'>Username is empty!!!</span></center>";
	           }
	           if (isset($_GET['usernameInco'])) {
		       echo "<center><span style='color:red'>Username can't be number!!!</span></center>";
	           }
	         ?>

			</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email"></td>
			<td>
			<?php 
			   if (isset($_GET['emailEmpty'])) {
		       echo "<center><span style='color:red'>Email is empty!!!</span></center>";
	           }
	           if (isset($_GET['emailInco'])) {
		       echo "<center><span style='color:red'>Incorrect email address!!!</span></center>";
	           }
	         ?>

			</td>
		</tr>
		<tr>
			<td>Subject:</td>
			<td><input type="text" name="subject"></td>
			<td>
			<?php 
			   if (isset($_GET['subjectEmpty'])) {
		       echo "<center><span style='color:red'>Subject is empty!!!</span></center>";
	           }
	         ?>

			</td>
		</tr>
		<tr>
			<td>message:</td>
			<td><textarea name="message" rows="10" cols="40"></textarea></td>
			<td>
			<?php 
			   if (isset($_GET['messageEmpty'])) {
		       echo "<center><span style='color:red'>Message is empty!!!</span></center>";
	           }
	         ?>

			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Send"></td>
		</tr>

	</form>
</table>

</body>
</html>