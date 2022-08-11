
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>home</title>
</head>
<body>
    
      <center><h1>Welcome to Sama.edu.af</h1></center>
      <hr>
      <hr>
      

<?php 

        /*
   
         // single dimension numeric array...
         $customers = array("Ali","Ahmad","Fatima","Maryam","Faisal","Farmanullah","Mhamood"); 

              for($i = 0; $i<count($customers);$i++)
                   echo $customers[$i]."<br/>";

                   

          // Multi-dimensional numeric array.
          $custmers = array(
                              array("Ali","Ahmad"),
                              array("Fatima","Maryam"),
                              array("Faisal", "Sana")
                          );

            echo $custmers[1][1];

               
            // Single dimensional associative array.
            $names = array('name'=> "Ali", 'lname'=> "Naseri", 'email'=> "ali@yahoo.com", 'address'=> "Kabul");
            echo $names['email'];

            //Multi-dimensional associative array.
            $names = array(

                     "Male"=>array("Ali", "Ahmad","Faisal","Farhad","Nasibullah"),
                     "Female"=>array("Maryam", "Fatima", "Layla","Noda","Fahima")

            );

                echo $names['Male'][3];

               

            //PHP loops...
             $num = 5;
             while($num>0){

                echo $num."<br/>";
                $num = $num - 1;
             }
              

             $foods = array("Burger","Pasta","Pizza","Chips");
             $num = 0;
             while($num<count($foods)){

                echo $foods[$num];
                 echo "<br/>";
                 $num = $num + 1;
             }



             for ($i=0; $i<count($foods); $i++) { 
                 echo $foods[$i];
                 echo "<br/>";
             }

             

             //PHP function...

             // simple program to return the fibbonaccia resutl.

             function fibo($num){
                if($num == 0)
                    return 0;
                elseif ($num == 1) {
                    return 1;
                }
                else
                    return fibo($num-1) + fibo($num-2);
             }

             $number = 7;
             $fi = fibo($number);
             echo "The fibbonaccia of ".$number." is: ".$fi;

             

             function calcuNetSalary($hours, $salary){

                return $hours * $salary;

             }

             function calcuFinalSalary($netSalary, $tax){

                return $result = $netSalary - (($netSalary*5)/100);
             }

             $hours = 40;
             $salary_hour = 500;
             $tax = 5;

             $netSalary = calcuNetSalary($hours, $salary_hour);
             $finalSalary = calcuFinalSalary($netSalary, $tax);

             echo "your total salary is: ".$finalSalary;

             //PHP Forms...

             if(isset($_GET['submit'])){
             echo $username = $_GET['username'];
             echo "<br/>";
             echo $password = $_GET['password'];
         }

         */

?>
<!--
    <form>
       <table>
           <tr>
            <td>Username:</td>
            <td><input type="text" name="username"></td>
           </tr>
           <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
           </tr>
           <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Save"></td>
           </tr>
       </table>
   </form>
   -->

<?php
    /*
         if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $gender = "";

           /*
            if ($_POST["gender"] == "Male") {

                echo "<span style='color:green'>Welcome Mr.: </span>".$username;
            }
            else
            
                echo "<span style='color:green'>Welcome Ms.: </span>".$username;
                
                */

                /*
                if ($_POST["gender"] == "Male") {

                $gender = "Welcome Mr. ";
                }
               else{

                $gender = "Welcome Ms. ";
               }
            
                echo "<span style='color:green'>".$gender.": </span>".$username;

             }
         else{

         */
            


?>

 <!--
   
          <form method="POST" action="" enctype="multipart/form-data">
              <table>
              <tr>
              <td>Username:</td>
              <td><input type="text" name="username"></td>
          </tr>
          <tr>
              <td>Gender</td>
              <td><select name="gender">
                    <option>Male</option>
                    <option>Female</option>
              </select><input style="width: 108px;" type="submit" name="submit"></td>
          </tr>
          <tr>
              <td></td>
              <td></td>
          </tr>
      </table>
          </form>
      -->
           
      <?php //} ?>



      <?php
                //date_default_timezone_set('Asia/Kabul');
                //echo date("Y/m/d h:i:s");

      /*
        if (isset($_POST['submit'])) {
            
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($username == "ali" && $password == "ali@123"){

               header("location:test1.php");
            }
            else
                echo "<span style='color:red'>Ops!!!<br/>Incorrect username or password!!!</span>";
        }
        */

      ?>

<!--
    <form method="POST" action="" enctype="multipart/form-data">
              <table>
              <tr>
              <td>Username:</td>
              <td><input type="text" name="username"></td>
          </tr>
          <tr>
              <td>Password:</td>
              <td><input type="password" name="password"></td>
          </tr>
          <tr>
              <td></td>
              <td><input type="submit" name="submit"></td>
          </tr>
      </table>
          </form>
      -->

<?php 

 /*
    $f = fopen("file.txt", "r");

     do{

        echo fgets($f)."<br/>";

    }while(!feof($f));

    fclose($f);

    

    $f = fopen("file.txt", "r+");
    $text = "this text is written through PHP";
    //fwrite($f, $text);

    do{
    
      echo fgets($f)."<br/>";

    }while(!feof($f))

    
    

    if (isset($_POST['submit'])) {
        
        $name = $_POST['name'].", ";

        $f = fopen("file.txt", "a");
             fwrite($f, $name);
             fclose($f);
    }

    */



?>
<!--
    <form method="post" action="" enctype="multipart/form-data">
        
        Insert Name<input type="text" name="name">
                    <input type="submit" name="submit" value="Save">

    </form>

    <a href="test1.php">display list</a>
    <hr/>
-->

    <?php 
            /*
            $fi = fopen("file.txt", "r");

            $names = fgetcsv($fi);

              $length = count($names);
              */

            /*for ($i=0; $i < $length ; $i++) { 
                
                echo $names[$i]."<br/>";
            }

            echo "<ol>";

            for ($i=0; $i < $length - 1 ; $i++) { 
                
                echo "<li>".$names[$i]."</li>";
            }

                echo "</ol>";

            fclose($fi);
            
            // website visitor counter...

            $f = fopen("counter.txt", "r");
            $number = fgets($f);
            fclose($f);
            $number++;

            $newFile = fopen("counter.txt", "w");

            fwrite($newFile, $number);

            fclose($newFile);

            echo "<span style='color:green'>Total visits:</span>".$number;
            */
            //unlink("notepad.txt");
            //rename("notepad.txt", "newNotepad.txt");
            //copy("newNotepad.txt", "abc/newNewNewNotepad.txt");

            //mkdir("Mujtaba Sultani");
            //mkdir("abc/First_directory");

            //rmdir("abc/First_directory");
            //rmdir("Mujtaba Sultani");

            //rename("Mujtaba Sultani", "Mujtaba Hamta");
            //rmdir("Mujtaba Hamta");
            /*

            if (isset($_POST['submit'])) {
                
                $username = $_POST['username']."<br/>";

                if(move_uploaded_file($_FILES['picture']['tmp_name'], "img/".$_FILES['picture']['name'])){
                echo "You're: ".$username;
                //$var = $_FILES['picture']['name'];
                //echo '<img src="img/'.$var.'" width="300">';
                echo '<img src="img/'.$_FILES['picture']['name'].'" width="300">';

                    }
                else{
                    echo "<span style='color:red'>Opps! your image has not been uploaded.</span>";
                }
            }
            */


            /*
            if (isset($_POST['username'])) {
                
                $username = $_POST['username'];
                $ftype = $_FILES['picture']['type'];
                $fsize = $_FILES['picture']['size'];

                $fileCorrect = 0;

                switch ($ftype) {
                    case 'image/png':
                        $fileCorrect = 1;
                        break;
                    case 'image/jpeg':
                        $fileCorrect = 1;
                        break;
                    case 'image/jpg':
                        $fileCorrect = 1;
                        break;
                    default:
                        $fileCorrect = 0;
                        break;
                }

                if($fileCorrect == 0){

                    echo "<span style='color:red'>Pleas choose a correct format (jpg*, png*, jpeg*)</span>";
                }
                elseif ($fsize > 1800000) {
                    echo "<span style='color:red'>Please choose size less than 4MB.</span>";
                }
                else{

                    if (move_uploaded_file($_FILES['picture']['tmp_name'], "img/".$_FILES['picture']['name'])) {
                        
                        echo "You're: ".$username."<br/>";
                        echo "<img src='img/".$_FILES['picture']['name']."' width='300'>";
                    }

                    else{

                        echo "<span style='color:red'>Opps! your image has not been uploaded... Try again!</span>";
                    }
                }
            }
    */

    ?>
     <!--
    <form method="POST" action="" enctype="multipart/form-data">

              <table>
              <tr>
              <td>Username:</td>
              <td><input type="text" name="username"></td>
          </tr>
          <tr>
              <td>Choose your Photo:</td>
              <td><input type="file" name="picture"></td>
          </tr>
          <tr>
              <td></td>
              <td><input type="submit" name="submit"></td>
          </tr>
      </table>
          </form>

          -->

          <?php 

             //setcookie("firstCookie", "firstCookie Set", time()+3600);


          ?>




</body>
</html>

<!DOCTYPE html>
<html>

<?php 

    /*
    //$color = "";
    
    if (isset($_POST['submit'])) {
        
        $color = $_POST['color'];
        setcookie("bcolor", $color, time()+3600);

    }
    elseif ($_COOKIE['bcolor']) {
        
        $color = $_COOKIE['bcolor'];
    }

    else{

        $color = "violet";
    }

    */

?>
<body bgcolor="<?php // echo $color ?>">

    <!--
    <form method="POST" action="" enctype="multipart/form-data">
        
        Choose color:<select name="color">
            
                    <option value="lightgreen">Green</option>
                    <option value="lightblue">Blue</option>
                    <option value="lightgray">Gray</option>
                    <option value="pink">Pink</option>
        </select>
        <input type="submit" name="submit" value="Change">

    </form>
-->

<?php 
    
    /*

    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "ahmad" && $password == "ahmad@123") {
            
            if ($_POST['remember'] == "on") {
                
                setcookie("username", $username, time() + 3600);
                setcookie("password", $password, time() + 3600);
            }

            header("location:test1.php");
            
        }
        else{

            echo "<span style='color:red'>Opps! Username or password is incorrect! Try again!</span>";
        }
    }

        $uname = "";
        $pass = "";

    if ($_COOKIE['username']) {
        
         $uname = $_COOKIE['username'];
         $pass = $_COOKIE['password'];
    }
    */

?>

<!--
  <form method="POST" action="" enctype="multipart/form-data">
      
        <table>
            
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php echo $uname; ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="<?php echo $pass; ?>"></td>
            </tr>
            <tr>
                <td>Remember my Password</td>
                <td><input type="checkbox" name="remember"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit"></td>
            </tr>

        </table>

  </form>
-->

</body>
</html>