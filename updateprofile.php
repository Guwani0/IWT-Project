<?php

include 'configure.php';
if(isset($_POST['submit']))
{
$userID=$_POST["uid"];
$userName=$_POST["uname"];
$userAge=$_POST["uage"];
$userGender=$_POST["ugender"];
$userDOB=$_POST["udob"];
$userCountry=$_POST["ucountry"];
$userEmail=$_POST["uemail"];
$userContact=$_POST["ucontact"];

$sql="INSERT INTO settings (ID, Name, Age, Gender, Date_of_Birth, Country, Email, Contact_No) VALUES ('$userID', '$userName', '$userAge', '$userGender', '$userDOB', '$userCountry', '$userEmail', '$userContact')";

$result=mysqli_query($con,$sql);
if($result)
{
    echo"Insert Successful";
}
else{
    echo"Error".$con->error;
}
}

$con->close();
?>