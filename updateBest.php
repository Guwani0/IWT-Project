<?php

require 'configure.php';

    
    $userEmail=$_POST["vemail"];
    $Nominee=$_POST["BEST"];

     if(empty($userEmail)||empty($Nominee))
     {
        echo "ALL REQURED";
     }
     else{
        $sql = "UPDATE best_new_artist SET Nominee='$Nominee' WHERE Email='$userEmail'";

        if($con->query($sql))
        {
            echo "Updated";
        }
        else{
            echo "Not updated";
        }


     }

?>