<?php 

	//$f = fopen("notExist.txt", "r+") or die("file you're trying to open is not exist!!!");

		//echo fgets($f);
	
	/*
		$fi = fopen("noExist.txt", "w+");

			fwrite($fi, "Welcome to error handling interesting topic.");
    	
			fclose($fi);


	 $fi = fopen("noExist.txt", "r+") or exit("File is not exist.");

	    do{

	    	echo fgetc($fi);

	    }while(!feof($fi));
          
          fclose($fi);

          */


          function errorHandler($error_no, $error_text){

          	  header("location:error_home.php");

          }
			
               set_error_handler("errorHandler");
				echo 20/0;	



?>