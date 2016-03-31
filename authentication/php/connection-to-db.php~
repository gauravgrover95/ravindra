<?php 
	$mysql_host = "localhost"; //specifies the hostname of the mysql server

	$mysql_username = "root"; //specifies the username of the mysql server u r using
	$mysql_password = ""; // specifies the mysql password for the mysql server in use

	$mysql_database = "mydatabase"; // specifies the database we are using in the mysql server

	$connection = mysql_connect($mysql_host, $mysql_username, $mysql_password);

	if( !$connection || !mysql_select_db($mysql_database)) {
		die(mysql_error());
	}
?>
