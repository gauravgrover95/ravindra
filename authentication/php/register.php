<?php 
	if(isset($_POST["email"], $_POST["password"], $_POST["fname"], $_POST["lname"], $_POST["cpassword"] )) {

			require "connection-to-db.php";

			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$cpassword = $_POST["cpassword"];


			if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {

				if($password != $cpassword) {
						echo "Passwords does not match";
			    }	else {

			           	$serial = (mysql_num_rows(mysql_query("SELECT * FROM users")) + 1);
							
							
							$query = "INSERT INTO users(serial, fname, lname, email, password) VALUES(" . $serial . ", '" . $fname . "', '" . $lname . "', '" . $email . "', '" . $password . "')" ;
				            $run = mysql_query($query);
				            
				            if(! $run ) {
				               die('\n\n\nCould not update data: ' . mysql_error());
				            
				            } else { 

				            	echo "Updated data successfully\nNow you may login with ur credentials";
							}				    
				}				



		    } else {

		    	echo "All the fields are mandetory to fill.\nPlease fill the form properly";
		    }
			            
	}

?>