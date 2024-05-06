<?php

require 'configure.php';

    $userEmail=$_POST["vemail"];

        $sql = "DELETE FROM Best_New_Artist WHERE Email='$userEmail' ";

        if($con->query($sql))
        {
            echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }


?>