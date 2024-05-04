<?php

require 'configure.php';

    $sql="SELECT  Email,Feed FROM Feedback";


    $result=$con->query($sql);

    if($result->num_rows>0)
    {
        echo "<table border='1'>";
        while($row=$result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row["Email"]."</td> "."<td>".$row["Feed"]."</td>"."<br>";
            echo "</tr>";
        }
        echo "</table>";

    }
    else{

        echo "No Results";
    }

    $con->close();



?>