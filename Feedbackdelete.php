<?php
  include 'configure.php';
  
  if(isset($_GET['deleteid'])){
    $FEEDid=$_GET['deleteid'];

    $sql = "DELETE FROM feedback WHERE idNumber=$FEEDid";
    $result = mysqli_query($con, $sql);

    if($result){
      // echo "Deleted Successfully";
      header('location:Feedbackdisplay.php');
    }
    else {
      die(mysqli_error($con));
    }
  }
?>