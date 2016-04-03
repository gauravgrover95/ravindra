<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Box</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- W3 CSS -->
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <!-- Custom CSS -->
    <link href="main.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="wrapper">
	

	<header class = "header">
		<h2>Admin Page</h2>
	</header>
	<div class="body container">
	
	<?php
		require '../authentication/php/connection-to-db.php';
	    $query  = "SELECT * FROM complaint" ;

	    $result = mysql_query($query);

        $serial = array();
	    $washrooms = array();
	    $articles = array();
	    $complaints = array();
	    $datetime = array();
	    $i = 0;

	    while($row = mysql_fetch_array($result)) {
	    		$serial[$i] = $row[0];
	            $washrooms[$i] = $row[1];
	            $articles[$i] = $row[2];
	            $complaints[$i] = $row[3];
	            $datetime[$i] = $row[4];
	            $i = $i + 1;
	    }	

        $size = count($articles);

	    for ($i=0; $i < $size; $i++) { 
			echo '<div class="compl-card">
				<p>Complaint No: ' . ($i+1) . '<br> Washroom No: ' . $washrooms[$i] . '<br> Article: ' . $articles[$i] . '<br> Complaint: ' . $complaints[$i] . '</p> 
				<form method="post" action="../php/delete-complaint.php">
					<input type="hidden" name="serial" value="' . $serial[$i] . '">
					<input type="hidden" name="datetime" value="' . $datetime[$i] . '">
					<input type="submit" value="Done" class="btn btn-success" style="float: right;">
				</form>
				</div>';
	    }

	?>
	</div>


</div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>