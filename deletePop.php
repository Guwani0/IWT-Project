<?php

require 'configure.php';

    $userEmail=$_POST["vemail"];

        $sql = "DELETE FROM Most_Popular_Artist  WHERE Email='$userEmail' ";

        if($con->query($sql))
        {
            echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }


?>