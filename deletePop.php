<?php

require 'configure.php';

    $ID = $_POST["vid"];

        $sql = "DELETE FROM  Most_Popular_Artist WHERE ID='$ID' ";

        if($con->query($sql))
        {
            echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }


?>