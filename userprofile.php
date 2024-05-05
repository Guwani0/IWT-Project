<?php
session_start();
require 'configure.php';

// Check if the user is logged in
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}

// Retrieve user information from the session
$firstName = $_SESSION['First_Name'];
$lastName = $_SESSION['Last_Name'];
$email = $_SESSION['Email'];
$contactNo = $_SESSION['Contact_No'];

?>

<div class="content">
    <div class="profile">
        <?php
        // Ensure the query executes and fetches data correctly
        $sql = "SELECT ID, First_Name, Last_Name, Email, Contact_No FROM registered_user";
        $result = $con->query($sql);

        if ($result->num_rows > 0) { // Check if the result set has rows
            echo "<table border='1'>";
            
            // Proper loop structure with braces
            while ($row = $result->fetch_assoc()) {
                $ID = $row['ID'];
                $FirstName = $row['First_Name'];
                $LastName = $row['Last_Name'];
                $Email = $row['Email'];
                $ContactNumber = $row['Contact_No'];

                echo "<tr>
                    <td>First Name:</td>
                    <td>{$FirstName}</td>
                </tr>";
                echo "<tr>
                    <td>Last Name:</td>
                    <td>{$LastName}</td>
                </tr>";
                echo "<tr>
                    <td>Email:</td>
                    <td>{$Email}</td>
                </tr>";
                echo "<tr>
                    <td>Contact Number:</td>
                    <td>{$ContactNumber}</td>
                </tr>";
            }

            echo "</table>";
        } else {
            echo "No user data found.";
        }
        ?>
    </div>
</div>
