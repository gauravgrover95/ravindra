<?php 
	if(isset($_POST["email"], $_POST["password"] )) {

		require "connection-to-db.php";

		$email = $_POST["email"];
		$password = $_POST["password"];

		echo "email and password are: " . $email . " and " . $password . "\n\n" ;

		if(!empty($email) && !empty($password)) {
			$query  = "SELECT * FROM users WHERE email = '" . $email .  "' AND password = '" . $password . "'" ;

			$result = mysql_query($query);

			$query_num_rows = mysql_num_rows($result);
				if($query_num_rows > 0) {
					$row = mysql_fetch_row($result);
					$fname = $row[1];

					echo '$fname is: ' . $fname;
					require "set.php";	
					echo "Login Successful!";
				} else {
					echo "Invalid Username/Password combination";
				}

		} else {
			echo "You must supply a username and password";
		}

		
	}

?>