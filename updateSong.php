<?php

require 'configure.php';

    
    $userEmail=$_POST["vemail"];
    $Nominee=$_POST["SONG"];

     if(empty($userEmail)||empty($Nominee))
     {
        echo "ALL REQURED";
     }
     else{
        $sql = "UPDATE Favourite_Song SET Nominee='$Nominee' WHERE Email='$userEmail'";

        if($con->query($sql))
        {
            echo "Updated";
        }
        else{
            echo "Not updated";
        }


     }

?>