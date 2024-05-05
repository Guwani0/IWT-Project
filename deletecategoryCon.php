<?php

    require 'configure.php';

    $c_id=$_POST["categoryID"];

    $sql="DELETE FROM categories WHERE CID='$c_id'";

    if($con->query($sql))
    {
        echo "Deleted";
    }
    else{
        echo "Not Successful";
    }

?>