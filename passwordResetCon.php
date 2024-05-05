<?php

require 'configure.php';

    $email=$_POST["email"];
    $newPassword=$_POST["newpassword"];

    if(empty($email)|| empty($newPassword))
    {
        echo "All Required";
    }
    else{
        $sql="UPDATE registered_user set U_password='$newPassword' WHERE Email='$email'";

        if($con->query($sql))
        {
            echo '<script>alert("Password updated successfully!");</script>';
        }
        else{
            echo "Not Updated";
        }
    }

    
?>