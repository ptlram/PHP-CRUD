<?php

    include("./config.php");

    if(isset($_POST["btn"]))
    {
        $id=$_POST['btn'];
        $query = $conn-> prepare("delete from students where id=$id");
        $result = $query->execute();
        if($query->execute())
        {
            echo "data is deleted";
        }
        else{
            echo "data not delete";
        }
       
    }

    
    $result = $conn->prepare("SELECT * FROM students");
    $result -> execute();
    $detail = $result-> fetchAll();
    
    echo "<table border='1'>";
    foreach ($detail as $details){
        echo "<tr>";
        echo "<td>".$details["id"]."</td>";
        echo "<td>".$details["name"]."</td>";
        echo "<td>".$details["age"]."</td>";
        echo "<td>
            <form method='post'>
            <button name='btn' value=".$details['id'].">delete</button>
            </form>
            </td>";
        echo "</tr>";
    }
    echo "</table>";

?>  