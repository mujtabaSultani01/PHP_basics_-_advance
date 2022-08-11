<?php 

  include "dbCon.php";
  $id = $_GET['id'];
  if (isset($_POST['username'])) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    if ($username != "" && $email != "" && $address != "") {
      
      $res = mysqli_query($con, "UPDATE `users` SET `name` = '$username', `email` = '$email', `address` = '$address' WHERE `users`.`id` = $id");
      if ($res) {
        
        header("location:users.php?updated=true");
      }
      else{

        echo "<span style='color:red'>Opps!!! an error occured, Try again!</span>";
      }
    }
    else{

      echo "<span style='color:red'>Please provide data for all fields!!!</span>";
    }

  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Users</title>
</head>
<body>
<h2 align="center">User update form</h2><hr/>
  <table align="center">
    
    <form method="POST" action="" enctype="multipart/form-data">
      
      <tr>
        <td>Username:</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>Address:</td>
        <td><input type="text" name="address"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Update"></td>
      </tr>

    </form>

  </table>

</body>
</html>