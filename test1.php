<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test1</title>
</head>
<body>

<?php 

   /*
	$fi = fopen("file.txt", "r");

			$names = fgetcsv($fi);

			  $length = count($names);

			/*for ($i=0; $i < $length - 1 ; $i++) { 
				
				echo $names[$i]."<br/>";
			}*/

         /*
			echo "<ol>";

			for ($i=0; $i < $length - 1 ; $i++) { 
				
				echo "<li>".$names[$i]."</li>";
			}

				echo "</ol>";

			fclose($fi);
			*/


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
            


    ?>
     
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

      

</body>
</html>