<?php 

	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
	/*

		if ($username == "" ) {
			
			header('location:email.php?usernameEmpty=true');
		}
		elseif(filter_var($username, FILTER_VALIDATE_INT)){
			header('location:email.php?usernameInco=true');	
		}
		elseif ($email == "") {
			header("location:email.php?emailEmpty");
		}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header('location:email.php?emailInco');
		}
		elseif ($subject == "") {
			header("location:email.php?subjectEmpty");
		}
		elseif ($message == "") {
			header("location:email.php?messageEmpty");
		}

		*/

		$validate_error = "";
		$mark = 0;

		if ($username == "" ) {
			
			$validate_error = "usernameEmpty=true&";
			$mark = 1;
		}
		if(filter_var($username, FILTER_VALIDATE_INT)){
			$validate_error .= "usernameInco=true&";
			$mark = 1;	
		}
		if ($email == "") {
			$validate_error .= "emailEmpty=true&";
			$mark = 1;
		}
		elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$validate_error .= "emailInco=true&";
			$mark = 1;
		}
		if ($subject == "") {
			$validate_error .= "subjectEmpty=true&";
			$mark = 1;
		}
	    if ($message == "") {
			$validate_error .= "messageEmpty=true";
			$mark = 1;
		}
		if($mark == 1){

			$result = "location:email.php?".$validate_error;
			header($result);
		}
			else{


				$message = "Name: ".$username."\n Message: ".$message;
				$header = "From: ".$email."\r\n CC:ali@gmail.com,layla@yahoo.com\r\n BCC:fawad@gmail.com, faisal@gmail.com";

			$result = mail($email, $subject, $message, $header);
			if ($result) {
				
				header('location:email.php?sent=true');
			}
			else{
				header('location:email.php?notSent=true');
			}
		}
	}

?>