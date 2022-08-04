<?php
    include '../database/connection.php';
    // if(isset($_GET["id"])){
    //     $prdct_id = $_GET["id"];
    //     echo $prdct_id;
    // }
    $id=$_POST["id"];
    // echo $prdct_id;
    if(isset($_POST["delete"])){

    $deletequery= "DELETE FROM tb_customer WHERE `tb_customer`.`id` =$id";
    echo $deletequery;
    $delete=mysqli_query($conn,$deletequery);
    header("Location:users.php");
    }
?>
