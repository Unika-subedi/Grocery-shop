<?php
    $servername="localhost";
    $username = "root";
    $password = "";
    $dbname = "db_vegetable_system";

    //create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    // var_dump($conn);
    //create database connection
    if($conn->connect_error){
        die("Error connecting to database" .$conn->connect_error);
    } else
    // {
    //      echo "Database connection established";
    //  }

?>