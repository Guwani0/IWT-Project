<?php

require 'configure.php';

if(isset($_POST["vemail"]) && isset($_POST["GROUP"]))
{
    $userEmail=$_POST["vemail"];
    $Nominee=$_POST["GROUP"];

    $sql="INSERT INTO Group_Of_The_Year (Email,Nominee) VALUES ('$userEmail','$Nominee')";
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