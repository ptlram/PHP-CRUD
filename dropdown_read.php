<?php

    include("./config.php");
    $result = $conn->prepare("SELECT * FROM students");
    $result -> execute();

    $detail = $result-> fetchAll();
    echo"<br>";
    echo "<select>";

    echo "<option>select name</option>";
    foreach ($detail as $details){
        echo "<option value='$details[id]'>".$details["name"]."</option>";
    }
    echo "</select>";

?>  