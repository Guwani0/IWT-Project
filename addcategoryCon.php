<?php

require 'configure.php';

$c_name=$_POST['categoryName'];

$sql="INSERT INTO categories (categoryName) VALUES ('$c_name')";

if($con->query($sql))
{
    echo '<script>alert("New category successfully added!");</script>';
}
else{
    echo "Error".$con->error;
}


?>