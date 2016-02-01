
<?php	

	session_start();

	$_SESSION['name'] = $fname;

	header("Location: ../");
	exit;

?>

