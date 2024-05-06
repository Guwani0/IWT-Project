<?php

require 'configure.php';

$sql = "SELECT ID, Email, Nominee FROM best_new_artist";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Email</th><th>Nominee</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["ID"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["Nominee"]."</td>";
        echo "<td><a href='update.php?id=".$row["ID"]."'>Update</a> | <a href='delete.php?id=".$row["ID"]."'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results";
}

$con->close();

?>