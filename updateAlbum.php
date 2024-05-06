<?php

require 'configure.php';

    
    $userEmail=$_POST["vemail"];
    $Nominee=$_POST["ALBUM"];

     if(empty($userEmail)||empty($Nominee))
     {
        echo "ALL REQURED";
     }
     else{
        $sql = "UPDATE Favourite_Album SET Nominee='$Nominee' WHERE Email='$userEmail'";

        if($con->query($sql))
        {
            echo "Updated";
        }
        else{
            echo "Not updated";
        }


     }

?>