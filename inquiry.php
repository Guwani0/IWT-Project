<?php

    require 'configure.php';

    $uName=$_POST["name"];
    $uEmail=$_POST["email"];
    $uSubject=$_POST["subject"];
    $uMessage=$_POST["message"];

    $sql="INSERT INTO inquiry VALUES ('','$uName','$uEmail','$uSubject','$uMessage')";

    if($con->query($sql))
    {
        echo "Insert Succesful";
    }
    else{
        echo "Error" .$con->error;
    }

    $con->close();
?>