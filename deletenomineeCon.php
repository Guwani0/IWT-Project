<?php

    require 'configure.php';

    $n_id=$_POST["nomID"];

    $sql="DELETE FROM nominees WHERE NID='$n_id'";

    if($con->query($sql))
    {
        echo '<script>alert("Successfully Deleted!");</script>';
    }
    else{
        echo "Not Successful";
    }

?>