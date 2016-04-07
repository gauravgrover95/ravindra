<?php 
	if(isset($_POST["email"], $_POST["password"], $_POST["fname"], $_POST["lname"], $_POST["cpassword"], $_POST['enroll'] )) {

			require "connection-to-db.php";

			$fname = $_POST["fname"];
			$lname = $_POST["lname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$cpassword = $_POST["cpassword"];
			$enroll = $_POST['enroll'];


			if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {

				$sql  = "SELECT * FROM users WHERE email = '$email'" ;
				$res = mysql_query($sql);

				$exists = mysql_num_rows($res);
				if($exists) {

					echo "email id already exist";

				} else {

					if($password != $cpassword) {
							echo "Passwords does not match";
				    }	else {

				           	$serial = (mysql_num_rows(mysql_query("SELECT * FROM users")) + 1);
								
								
								$query = "INSERT INTO users(serial, fname, lname, email, password, enroll) VALUES(" . $serial . ", '" . $fname . "', '" . $lname . "', '" . $email . "', '" . $password . "', '" . $enroll . "')" ;
					            $run = mysql_query($query);
					            
					            if(! $run ) {
					               die('\n\n\nCould not update data: ' . mysql_error());
					            
					            } else { 

					            	echo "Updated data successfully\nNow you may login with ur credentials";
								}				    
					}				
				}
		    } else {

		    	echo "All the fields are mandetory to fill.\nPlease fill the form properly";
		    }
			            
	}

?>