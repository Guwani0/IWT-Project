<?php
    require 'configure.php';

    $email = $_POST['email']; // Assuming the email is sent via POST method

$sql = "SELECT Email, First_Name, Last_Name, Contact_No, DOB, Country, U_password FROM user WHERE Email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>First Name: " . $row["first_name"]. "</p>";
        echo "<p>Last Name: " . $row["last_name"]. "</p>";
        echo "<p>Email: " . $row["email"]. "</p>";
        echo "<p>Contact Number: " . $row["contact_number"]. "</p>";
        echo "<p>Date of Birth: " . $row["date_of_birth"]. "</p>";
        echo "<p>Country: " . $row["country"]. "</p>";
        echo "<p>Password: " . $row["password"]. "</p>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>