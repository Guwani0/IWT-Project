<?php
    require 'configure.php';

    if(isset($_POST))
    {
        $uName=$_POST["name"];
        $uEmail=$_POST["email"];
        $uSubject=$_POST["subject"];
        $uMessage=$_POST["message"];
    
        $sql="INSERT INTO contact (Name, Email, Subject, Message)VALUES ('$uName','$uEmail','$uSubject','$uMessage')";
        mysqli_query($con, $sql);
        echo "<script> alert('Submitted Successfully'); </script>";
        header("location: contactsucess.php");
        exit();
    }
        else{
            echo "<script> alert('Not Submitted'); window.history.back();</script>";
            exit();
        }  
?>
