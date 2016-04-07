<?php 
if(isset($_POST["complaint"], $_POST["article"], $_POST["washroom"], $_POST['enroll'])) {

    require "../authentication/php/connection-to-db.php";


    $washroom = $_POST['washroom'];
    $article = $_POST['article'];
    $complaint = $_POST['complaint'];
    $enroll = $_POST['enroll'];


    $query = "INSERT INTO complaint(washroom, article, complaint, enroll) VALUES(" . $washroom . ", '" . $article . "', '" . $complaint . "', " . $enroll . ")";

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