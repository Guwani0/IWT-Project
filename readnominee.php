<?php
    require 'configure.php';

    $sql="SELECT NID, nomineeName, nomineeCategory FROM nominees";

    $result=$con->query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            echo $row["NID"]." ".$row["nomineeName"]." - ".$row["nomineeCategory"]."<br>";
            
        }
    }
    else{
        echo "No results";
    }





?>