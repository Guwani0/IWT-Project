<?php

require 'configure.php';

    $ID = $_POST["vid"];

        $sql = "DELETE FROM  Artist_Of_The_Year WHERE ID='$ID' ";

        if($con->query($sql))
        {
            echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }


?>