<?php
    require 'configure.php';

$n_name=$_POST['nomName'];
$n_cat=$_POST['nomCat'];

$sql="INSERT INTO nominees (nomineeName, nomineeCategory) VALUES ('$n_name', '$n_cat')";

if($con->query($sql))
{
    echo '<script>alert("New category successfully added!");</script>';
}
else{
    echo "Error".$con->error;
}


?>
