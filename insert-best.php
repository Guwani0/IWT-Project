<?php

require 'configure.php';

if(isset($_POST["vemail"]) && isset($_POST["BEST"]))
{
    $userEmail=$_POST["vemail"];
    $Nominee=$_POST["BEST"];

    $sql="INSERT INTO Best_New_Artist (Email,Nominee) VALUES ('$userEmail','$Nominee')";
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

