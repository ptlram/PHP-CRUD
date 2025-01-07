<?php

    $hostname="localhost";
    $usename="root";
    $password=null;
    // $database="demo";

    // $conn= new mysqli($hostname,$usename,$password,$database);
    // if($conn -> connect_error)
    // {
    //     die("connection fails".$conn->connect_error);
    // }

    $conn= new PDO("mysql:host=$hostname; dbname=demo",$usename,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>