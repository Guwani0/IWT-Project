<?php

require 'configure.php';

    
    $userEmail=$_POST["vemail"];
    $Nominee=$_POST["GROUP"];

     if(empty($userEmail)||empty($Nominee))
     {
        echo "ALL REQURED";
     }
     else{
        $sql = "UPDATE Group_Of_The_Year SET Nominee='$Nominee' WHERE Email='$userEmail'";

        if($con->query($sql))
        {
            echo "Updated";
        }
        else{
            echo "Not updated";
        }


     }

?>