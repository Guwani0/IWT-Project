<?php

require 'configure.php';

    $ID = $_POST["vid"];

        $sql = "DELETE FROM  Favourite_Album WHERE ID='$ID' ";

        if($con->query($sql))
        {
            echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }


?>