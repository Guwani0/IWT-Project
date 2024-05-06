<?php

require 'configure.php';

    
    $userEmail=$_POST["vemail"];
    $Nominee=$_POST["POP"];

     if(empty($userEmail)||empty($Nominee))
     {
        echo "ALL REQURED";
     }
     else{
        $sql = "UPDATE Most_Popular_Artist SET Nominee='$Nominee' WHERE Email='$userEmail'";

        if($con->query($sql))
        {
            echo "Updated";
        }
        else{
            echo "Not updated";
        }


     }

?>