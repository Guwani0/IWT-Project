<?php

    require 'configure.php';

    $n_id=$_POST["nomID"];

    $sql="DELETE FROM nominees WHERE NID='$n_id'";

    if($con->query($sql))
    {
        echo "Deleted";
    }
    else{
        echo "Not Successful";
    }

?>