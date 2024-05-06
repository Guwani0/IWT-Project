<?php
    require 'configure.php';

    $sql="SELECT CID,categoryName FROM categories";

    $result=$con->query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            echo $row["CID"]." ".$row["categoryName"]."<br>";
            
        }
    }
    else{
        echo "No results";
    }





?>