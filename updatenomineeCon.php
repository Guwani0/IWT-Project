<?php
    require 'configure.php';

    $n_id=$_POST["nomID"];
    $n_name=$_POST["nomName"];
    $n_category=$_POST["nomCat"];

    if(empty($n_id)||empty($n_name)||empty($n_category))
    {
        echo "All Requred";
    }
    else{
        $sql="UPDATE nominees set nomineeName='$n_name', nomineeCategory='$n_category' WHERE NID='$n_id'";

        if($con->query($sql))
        {
            echo '<script>alert("Nominee successfully updated!");</script>';
        }
        else{
            echo "Not updated";
        }
    }
    
?>