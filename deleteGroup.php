<?php

require 'configure.php';

$userEmail=$_POST["vemail"];

$sql = "DELETE FROM Group_Of_The_Year WHERE Email='$userEmail' ";

        if($con->query($sql))
        {
            echo "Deleted";
        }
        else{
            echo "Not Deleted";
        }


?>