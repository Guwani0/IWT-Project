<?php

require 'configure.php';

    $ID = $_POST["vid"];
    $userEmail=$_POST["vemail"];
    $Nominee=$_POST["SONG"];

     if(empty($ID)||empty($userEmail)||empty($Nominee))
     {
        echo "ALL REQURED";
     }
     else{
        $sql = "UPDATE Favourite_Song SET Email='$userEmail', Nominee='$Nominee' WHERE ID=$ID";

        if($con->query($sql))
        {
            echo "Updated";
        }
        else{
            echo "Not updated";
        }


     }

?>