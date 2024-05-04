<?php

$con=new mysqli("localhost","root","","ima");

if($con->connect_error)
{
    die("Connection failed" .$con->connect_error);
}
else{
    echo "Successful";
}

