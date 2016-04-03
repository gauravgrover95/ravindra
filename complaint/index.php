<?php 

    require "../authentication/php/connection-to-db.php";


    $query  = "SELECT * FROM complaint" ;

    $result = mysql_query($query);

    $articles = array();

    $i = 0;

    while($row = mysql_fetch_array($result)) {

            $articles[$i] = $row[2];
            $i = $i + 1;
    }


    // for($i = 0; $i < 2; $i++) {
    //     echo $articles[$i];
    //     echo "\n";
    // }

    $size = count($articles);
    // echo $size;

    $btn_disabled = '<button class="btn btn-danger disabled" title="complaint already registered">Complaint</button>';
    $btn_washbasin = '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal">Complaint</button>';
    $btn_toilet = '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal">Complaint</button>';
    $btn_bathroom = '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal">Complaint</button>';
    $btn_watercooler = '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal">Complaint</button>';
    $btn_washing = '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal">Complaint</button>';
    $btn_geyser = '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal">Complaint</button>';
    $btn_purifier = '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal">Complaint</button>';


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Complaint Box</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- W3 CSS -->
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../">
                    	Main Website
                    </a>
                </li>
                <li>
                    <a href="#" class="active">Washroom 1</a>
                </li>
                <li>
                    <a href="#">Washroom 2</a>
                </li>
                <li>
                    <a href="#">Washroom 3</a>
                </li>
                <li>
                    <a href="#">Washroom 4</a>
                </li>
                <li>
                    <a href="#">Washroom 5</a>
                </li>
                <li>
                    <a href="#">Washroom 6</a>
                </li>
                <li>
                    <a href="#">Washroom 7</a>
                </li>
                <li>
                    <a href="#">Washroom 8</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid w3-card-2">
                <div class="row">
                    <div class="col-lg-12 content">
                        <!-- <h1 class="heading">Washroom 1</h1> -->

                        <div class="w3-card compl-card">
                        	<img src="https://www.deadstock.co.in/content/images/thumbs/0002173_wash-basin-cabinet-wash-basin-under-over-counter-1027-circle-cera_360.png" height="60" width="100">
												  <h3>Wash-basin</h3>


												  <?php

                                                    $check = "washbasin";
                                                    $button = $btn_washbasin;
                                                    for ($i=0; $i < $size; $i++) { 
                                                        if($articles[$i] == $check) {
                                                            $button = $btn_disabled; 
                                                        }
                                                    }

                                                    echo $button;

                                                  ?>

												</div>
												<div class="w3-card compl-card">
                        	<img src="https://www.deadstock.co.in/content/images/thumbs/0002173_wash-basin-cabinet-wash-basin-under-over-counter-1027-circle-cera_360.png" height="60" width="100">
												  <h3>toilet</h3>

                                                  <?php

                                                    $check = "toilet";
                                                    $button = $btn_toilet;
                                                    for ($i=0; $i < $size; $i++) { 
                                                        if($articles[$i] == $check) {
                                                            $button = $btn_disabled; 
                                                        }
                                                    }

                                                    echo $button;

                                                  ?>

												</div>
												<div class="w3-card compl-card">
                        	<img src="https://www.deadstock.co.in/content/images/thumbs/0002173_wash-basin-cabinet-wash-basin-under-over-counter-1027-circle-cera_360.png" height="60" width="100">
												  <h3>bathroom</h3>

                                                  <?php

                                                    $check = "bathroom";
                                                    $button = $btn_bathroom;
                                                    for ($i=0; $i < $size; $i++) { 
                                                        if($articles[$i] == $check) {
                                                            $button = $btn_disabled; 
                                                        }
                                                    }

                                                    echo $button;

                                                  ?> 

												</div>
												<div class="w3-card compl-card">
                        	<img src="https://www.deadstock.co.in/content/images/thumbs/0002173_wash-basin-cabinet-wash-basin-under-over-counter-1027-circle-cera_360.png" height="60" width="100">
												  <h3>watercooler</h3>

                                                  <?php

                                                    $check = "watercooler";
                                                    $button = $btn_watercooler;
                                                    for ($i=0; $i < $size; $i++) { 
                                                        if($articles[$i] == $check) {
                                                            $button = $btn_disabled; 
                                                        }
                                                    }

                                                    echo $button;

                                                  ?>

												</div>
												<div class="w3-card compl-card">
                        	<img src="https://www.deadstock.co.in/content/images/thumbs/0002173_wash-basin-cabinet-wash-basin-under-over-counter-1027-circle-cera_360.png" height="60" width="100">
												  <h3>washing machine</h3>

                                                  <?php

                                                    $check = "washing";
                                                    $button = $btn_washing;
                                                    for ($i=0; $i < $size; $i++) { 
                                                        if($articles[$i] == $check) {
                                                            $button = $btn_disabled; 
                                                        }
                                                    }

                                                    echo $button;

                                                  ?>

												</div>
												<div class="w3-card compl-card">
                        	<img src="https://www.deadstock.co.in/content/images/thumbs/0002173_wash-basin-cabinet-wash-basin-under-over-counter-1027-circle-cera_360.png" height="60" width="100">
												  <h3>Geyser/Hot Water</h3>

                                                  <?php

                                                    $check = "geyser";
                                                    $button = $btn_geyser;
                                                    for ($i=0; $i < $size; $i++) { 
                                                        if($articles[$i] == $check) {
                                                            $button = $btn_disabled; 
                                                        }
                                                    }

                                                    echo $button;

                                                  ?>                                                  

												</div>
												<div class="w3-card compl-card">
                        	<img src="https://www.deadstock.co.in/content/images/thumbs/0002173_wash-basin-cabinet-wash-basin-under-over-counter-1027-circle-cera_360.png" height="60" width="100">
												  <h3>Purifier</h3>

                                                  <?php

                                                    $check = "purifier";
                                                    $button = $btn_purifier;
                                                    for ($i=0; $i < $size; $i++) { 
                                                        if($articles[$i] == $check) {
                                                            $button = $btn_disabled; 
                                                        }
                                                    }

                                                    echo $button;

                                                  ?>
												</div>

                        <!-- <a href="#menu-toggle" class="btn btn-primary submit" id="menu-toggle">Submit</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->


  <!-- Modal -->

  <?php 

    $all_washrooms = [
    "Washroom 1" => 1,
    "Washroom 2" => 2,
    "Washroom 3" => 3,
    "Washroom 4" => 4,
    "Washroom 5" => 5,
    "Washroom 6" => 6,
    "Washroom 7" => 7
];

    $all_articles = [
    "Washbasin" => "washbasin",
    "Toilet" => "toilet",
    "Bathroom" => "bathroom",
    "Watercooler" => "watercooler",
    "Washing Machine" => "washing",
    "Geyser/Hot Water" => "geyser",
    "Purifier" => "purifier"
];

    foreach ($all_washrooms as $wkey => $wvalue) {
        foreach ($all_articles as $key => $value) {

            echo '<div class="modal fade" id="' . $value . '-modal" role="dialog">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">' . $key . '</h4>
            </div>
            <div class="modal-body">
            <form method="post" action="../php/register-complaint.php">
            <input type="hidden" name="washroom" value="' . $wvalue . '">
            <input type="hidden" name="article" value="' . $value . '">
                <textarea placeholder="Enter your complaint here" name="complaint"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary submit" name="Submit">
            </form>
            </div>
          </div>
        </div>
      </div>';

        }
    }


  ?>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script 
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script> -->

</body>

</html>
