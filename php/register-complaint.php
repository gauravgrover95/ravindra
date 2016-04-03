<?php 
if(isset($_POST["complaint"], $_POST["article"], $_POST["washroom"])) {


    require "../authentication/php/connection-to-db.php";


    $washroom = $_POST['washroom'];
    $article = $_POST['article'];
    $complaint = $_POST['complaint'];

    // "', '" . '2014-12-28 12:10:53' . 


    $query = "INSERT INTO complaint(washroom, article, complaint) VALUES(" . $washroom . ", '" . $article . "', '" . $complaint . "')";

    $run = mysql_query($query);
    
    if(! $run ) {
        // This code is commented for testing purposes
       // die('\n\n\nCould not update data: ' . mysql_error());
       die('\n\n\nSorry! Complaint cannot be registered right now');
    
    } 

    // This code is left for alert purpose for data updated successfullt
    else { 

            echo "We are sorry for the inconvinence. Your complaint has been registered. Please wait while the page reloads automatically...";
            header('Location: ../complaint');
    }
	
}
?>