<?php

require 'configure.php';

if(isset($_POST["vemail"]) && isset($_POST["SONG"]))
{
    $userEmail=$_POST["vemail"];
    $Nominee=$_POST["SONG"];

    $sql="INSERT INTO Favourite_Song (Email,Nominee) VALUES ('$userEmail','$Nominee')";
    if(mysqli_query($con, $sql)){
    header("location: success.php");
    exit();
}
    else{
        header("location: error.php");
        exit();
    }
}
else{
    header("location: error.php");
        exit();
}

?>