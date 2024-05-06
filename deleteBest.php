<?php

require 'configure.php';

    $ID = $_POST["vid"];

        $sql = "DELETE FROM  Best_New_Artist WHERE ID='$ID' ";

        if($con->query($sql))
        {
            echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }


?>