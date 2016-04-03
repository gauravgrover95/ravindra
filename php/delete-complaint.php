<?php
if(isset($_POST["serial"])) {


    require "../authentication/php/connection-to-db.php";
    $serial = $_POST["serial"];

    $query = "DELETE FROM complaint WHERE serial=" . $serial . "";

    $run = mysql_query($query);
    
    if( !$run ) {
        // This code is commented for testing purposes
       // die('\n\n\nCould not update data: ' . mysql_error());
       die('\n\n\nSorry! Entry cannot be deleted right now' . mysql_error());
    
    } 

    // This code is left for alert purpose for data updated successfullt
    else { 
            header('Location: ../admin');
    }

}


?>	
