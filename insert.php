<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form method="post" action="">
      Name :
      <input
        type="text"
        name="name"
        placeholder="enter your username"
        required
      />
      <br />
      <br />
      age :
      <input
        type="text"
        name="age"
        placeholder="enter your username"
        required
      />
      <br>
      <br>
      <button name="button">Add Data</button>
    </form>
  </body>
</html>

<?php
if(isset($_POST["button"]))
{
    $name=$_POST["name"];
    $age=$_POST["age"];
    include("./config.php");
    $query = $conn -> prepare(" INSERT INTO `students` (`id`, `name`, `age`) VALUES (NULL, '$name', '$age')");
    $result= $query -> execute();
    echo "<br>";
    echo "data inserted";
}

?>
