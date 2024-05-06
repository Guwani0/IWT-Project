<?php
require 'configure.php';
session_start();

if (!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($con, "SELECT * FROM contact WHERE ID = '$sessionid'");
    $row = mysqli_fetch_assoc($result);
}
    $id = $row['ID'];

if (isset($_POST['submit'])) {
    $sql = "DELETE FROM contact WHERE ID=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Deleted Successfull";
        header('location:contactus.php');
    } else {
        die(mysqli_error($con));
    }
}
?>