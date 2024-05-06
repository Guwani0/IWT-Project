<?php

require 'configure.php';

$sql="SELECT ID,Email,Nominee FROM Artist_Of_The_Year";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo "<table border='1'>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["ID"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["Nominee"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "No results";
}

$con->close();

?>