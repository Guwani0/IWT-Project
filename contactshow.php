<?php

    require 'configure.php';

    $sql="SELECT ID,Name,Email,Subject,Message FROM contact";

    $result=$con->query($sql);
    
    if($result->num_rows>0)
    {
    
        while($row=$result->fetch_assoc())
        {
            $row["ID"]." ".$row["Name"]." ".$row["Email"]." ".$row["Subject"]." ".$row["Message"]."<br>";
           /* echo "<td>".$row["ID"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["Message"]."<br>";*/
        }
    }
    
    else{
        echo "No Results";
    }

    $con->close(); 
?>
