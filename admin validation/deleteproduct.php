<?php
    include '../database/connection.php';
    include '.logincheck.php';
    // if(isset($_GET["id"])){
    //     $prdct_id = $_GET["id"];
    //     echo $prdct_id;
    // }
    $prdct_id=$_POST["id"];
    // echo $prdct_id;
    if(isset($_POST["delete"])){

    $deletequery= "DELETE FROM product WHERE `product`.`prdct_id` =$prdct_id";
    // echo $deletequery;
    $delete=mysqli_query($conn,$deletequery);
    $_SESSION['msg']="deleted successfully";
    header("Location:./viewproduct.php");
    }

    if(isset($_POST["add"])){
        header('location:addproduct.php');
    }
?>
