<?php

    include("./config.php");
    $result = $conn->prepare("SELECT * FROM students");
    $result -> execute();
    $detail = $result-> fetchAll();
    
    echo "<table border='1'>";
    foreach ($detail as $details){
        echo "<tr>";
        echo "<td>".$details["id"]."</td>";
        echo "<td>".$details["name"]."</td>";
        echo "<td>".$details["age"]."</td>";
        echo "</tr>";
    }
    echo "</table>";

?>  