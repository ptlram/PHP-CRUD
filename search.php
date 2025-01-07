<form method="post">
    <input type="text" name="search" placeholder="enter name for search">
    <br>
    <br>
    <button>search</button>
</form>


<?php
include("./config.php");

if(isset($_POST["search"]))
{
    $name = $_POST["search"];

    $result= $conn -> prepare("select * from students where name='$name'");
    $result->execute();
    $fetchdata = $result-> fetchAll();

    echo "<table border='1'>";
    foreach ($fetchdata as $details){
        echo "<tr>";
        echo "<td>".$details["name"]."</td>";
        echo "<td>".$details["age"]."</td>";
        echo "</tr>";
    }
    echo "</table>";

}

?>