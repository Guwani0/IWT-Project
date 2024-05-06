<?php

require 'configure.php';

    $userEmail=$_POST["vemail"];

        $sql = "DELETE FROM Favourite_Song WHERE Email='$userEmail' ";

        if($con->query($sql))
        {
            echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }


?>