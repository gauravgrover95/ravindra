<?php 

    session_start();
    if(!isset($_SESSION['name']) || !isset($_SESSION['enroll'])) {

        $message = "You need to login to access this area Click <a href='../authentication'>here</a> to sign in";
        exit($message);
    }

    require "../authentication/php/connection-to-db.php";

    $enroll = $_SESSION['enroll'];

    $all_washrooms = [
        "Washroom 1" => 1,
        "Washroom 2" => 2,
        "Washroom 3" => 3,
        "Washroom 4" => 4,
        "Washroom 5" => 5,
        "Washroom 6" => 6,
        "Washroom 7" => 7,
        "Washroom 8" => 8,
        "Washroom 9" => 9,
        "Washroom 10" => 10,
        "Washroom 11" => 11,
        "Washroom 12" => 12,
        "Washroom 13" => 13,
        "Washroom 14" => 14,
        "Washroom 15" => 15,
        "Washroom 16" => 16,
        "Washroom 17" => 17,
        "Washroom 18" => 18,
    ];

    $all_articles = [
        "Washbasin" => "washbasin", // 1
        "Toilet" => "toilet",       // 2
        "Bathroom" => "bathroom",   // 3
        "Watercooler" => "watercooler", // 4
        "Washing Machine" => "washing", // 5
        "Geyser/Hot Water" => "geyser", // 6
        "Purifier" => "purifier" // 7
    ];


    $complaints = array(array());

    $query  = "SELECT * FROM complaint" ;

    $result = mysql_query($query);
    

    $i = 0;
    $k = 0;
    while($row = mysql_fetch_array($result)) {
            if($row[2] == 'washbasin') {
                $k = 0;
            }elseif ($row[2] == 'toilet') {
                $k = 1;
            }elseif ($row[2] == 'bathroom') {
                $k = 2;
            }elseif ($row[2] == 'watercooler') {
                $k = 3;
            }elseif ($row[2] == 'washing') {
                $k = 4;
            }elseif ($row[2] == 'geyser') {
                $k = 5;
            }elseif ($row[2] == 'purifier') {
                $k = 6;
            }




            $complaints[$row[1]-1][$k] = 'faulty';
            $i = $i + 1;
    }





    $size = count($articles);
    $wsize = count($all_washrooms);
    $asize = count($all_articles);

$btn = array(


    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-1">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-1">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-1">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-1">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-1">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-1">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-1">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-2">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-2">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-2">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-2">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-2">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-2">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-2">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-3">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-3">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-3">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-3">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-3">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-3">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-3">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-4">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-4">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-4">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-4">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-4">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-4">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-4">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-5">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-5">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-5">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-5">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-5">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-5">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-5">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-6">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-6">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-6">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-6">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-6">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-6">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-6">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-7">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-7">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-7">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-7">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-7">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-7">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-7">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-8">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-8">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-8">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-8">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-8">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-8">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-8">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-9">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-9">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-9">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-9">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-9">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-9">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-9">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-10">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-10">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-10">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-10">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-10">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-10">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-10">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-11">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-11">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-11">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-11">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-11">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-11">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-11">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-12">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-12">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-12">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-12">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-12">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-12">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-12">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-13">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-13">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-13">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-13">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-13">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-13">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-13">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-14">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-14">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-14">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-14">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-14">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-14">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-14">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-15">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-15">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-15">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-15">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-15">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-15">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-15">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-16">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-16">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-16">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-16">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-16">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-16">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-16">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-17">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-17">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-17">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-17">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-17">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-17">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-17">Complaint</button>'),

    array('<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washbasin-modal-18">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#toilet-modal-18">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#bathroom-modal-18">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#watercooler-modal-18">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#washing-modal-18">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#geyser-modal-18">Complaint</button>', '<button class="btn btn-success" title="click to register complaint" data-toggle="modal" data-target="#purifier-modal-18">Complaint</button>'),

    );
    $btn_disabled = '<button class="btn btn-danger disabled" title="complaint already registered">Complaint</button>';


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

                <li class="trigger-1">
                    <a href="#" class="active">Washroom 1</a>
                </li>

                <?php 
                    for ($i=2; $i <= $wsize; $i++) { 
                        echo    '<li class="trigger-' . $i . '">
                                <a href="#">Washroom ' . $i . '</a>
                                </li>';
                    }
                ?>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->




        <!-- Page Content -->
        <?php 

        $i = 0;
        $j = 0;
        $k = 0;

        foreach ($all_washrooms as $wkey => $wvalue) {

            $j = 0;
            if($k == 0) {
                echo '<div id="page-content-wrapper" class="washroom active-card washroom-' . $wvalue . '">
                    <div class="container-fluid w3-card-2">
                    <h2>' . $wkey . '</h2>';
            } else {
                echo '<div id="page-content-wrapper" class="washroom washroom-' . $wvalue . '">
                        <div class="container-fluid w3-card-2">
                        <h2>' . $wkey . '</h2>';
            }

            $k++;

            foreach ($all_articles as $key => $value) {

                   echo '<div class="row">
                            <div class="col-lg-12 content">

                                <div class="w3-card compl-card">
                                   <img src="../img/complaint/' . $value . '.png" height="60" width="80">
                                   <h3>' . $key . '</h3>';


                                   

                                    $check = 'faulty';
                                    $button = $btn[$i][$j]; 
                                    if($complaints[$i][$j] == $check) {
                                        $button = $btn_disabled; 
                                    }


                                    echo $button;

                                  

            echo '               </div>
                            </div>
                        </div>';
            
                $j++;
            }

            echo'   </div>
                </div>';
            $i++;
        }

        ?>
                                          
    </div>
    <!-- /#wrapper -->


  <!-- Modal -->

  <?php 

    foreach ($all_washrooms as $wkey => $wvalue) {
        foreach ($all_articles as $key => $value) {

        echo '<div class="modal fade" id="' . $value . '-modal-' . $wvalue . '" role="dialog">
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
            <input type="hidden" name="enroll" value="' . $enroll . '">
            
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

    <script type="text/javascript" src = "js/main.js"></script>

</body>

</html>
