<?php

    include("./config.php");

    if(isset($_GET["id"]))
    {

        $id=$_GET["id"];
        $query = $conn-> prepare("select * from students where id='$id'");
        $query->execute();
        $updatedata=$query-> fetchAll();
        
        $name = $updatedata[0]["name"];
        $age = $updatedata[0]["age"];
        echo "<form method='post'>
        id : <input type='text' value='$id'/>
        <br>
        <br>
        name : <input type='text' name='updatename' value='$name'/>
        <br>
        <br>
        age : <input type='text' name='updateage' value='$age'/>
        <br>
        <br>
        <button value=".$id." name='btnup'>updatedata</button>
        </form>";

    }

?>

<?php
    if(isset($_POST["btnup"]))
    {
        $id=$_POST["btnup"];

        $name = $_POST["updatename"];
        $age = $_POST["updateage"];

        $updatedata= $conn -> prepare("update students set name='$name', age='$age' where id='$id'");
        echo $updatedata-> execute();
        echo"update";
    }
?>