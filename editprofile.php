

<?php
require 'configure.php';
session_start();

if(!empty($_SESSION['sessionid'])) {
    $sessionid = $_SESSION["sessionid"];
    $result = mysqli_query($con, "SELECT * FROM registered_user WHERE ID = '$sessionid'");
    $row = mysqli_fetch_assoc($result);
} 

$id = $row['ID'];

    // $id=$_POST['id'];
    $sql="SELECT * from `registered_user` where ID=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $fname=$row['First_Name'];
    $lname=$row['Last_Name'];
    $email=$row['Email'];
    $mobile=$row['Contact_No'];
    $password=$row['U_password'];

if(isset($_POST['submit']))
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql="update `registered_user` set First_Name='$fname',Last_Name='$lname', Email='$email', Contact_No='$mobile', U_password='$password' where id=$id";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Updated successfully";
        // header('location:display.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <title>Crud Operation enter</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
       
        <div class="form-group">
            <label>First Name </label><br>
            <input type="text" class="form-control" placeholder="Enter Your Name" 
            name="firstname" value=<?php echo $fname;?>><br>
        </div>        
        
        <div class="form-group">
            <label>Last Name</label><br>
            <input type="text" class="form-control" placeholder="Enter Your Name" 
            name="lastname" value=<?php echo $lname;?>><br>
        </div>

        <div class="form-group">
            <label>E-mail</label><br>
            <input type="text" class="form-control" placeholder="Enter Your E-mail" 
            name="email" value=<?php echo $email;?>><br>
        </div>

        <div class="form-group">
            <labe>Mobile</label><br>
            <input type="text" class="form-control" placeholder="Enter Your Mobile Number" 
            name="mobile" value=<?php echo $mobile;?>><br>
        </div>

        <div class="form-group">
            <label>Password</label><br>
            <input type="text" class="form-control" placeholder="Enter Your Password" 
            name="password" value=<?php echo $password;?>><br>
        </div>
        <br><br><button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>
</html>