<?php
    require 'configure.php';

    $c_id=$_POST["categoryID"];
    $c_name=$_POST["categoryName"];

    if(empty($c_id)||empty($c_name))
    {
        echo "All Requred";
    }
    else{
        $sql="UPDATE categories set categoryName='$c_name' WHERE CID='$c_id'";

        if($con->query($sql))
        {
            echo "Updated";
        }
        else{
            echo "Not updated";
        }
    }
    
?>