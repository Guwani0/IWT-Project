<?php

require 'configure.php';

$feedId=$_POST["fEmail"];
$feedEmail=$_POST["fText"];


$sql="INSERT INTO feedback VALUES ('$feedId','$feedEmail')";

if($con->query($sql))
{
    echo "insert successfull";
}
else{
    echo "error".$con->error;
}

$con->close();


?>