<?php
    session_start();
    include '../database/connection.php';
    include '.logincheck.php';
    // if(isset($_GET["id"])){
    //     $prdct_id = $_GET["id"];
    //     echo $prdct_id;
    // }
    $cat_id=$_POST["id"];
    // echo $cat_id;
    if(isset($_POST["delete"])){

    $deletequery= "DELETE FROM categories WHERE `categories`.`id` =$cat_id";
    // echo $deletequery;
    $delete=mysqli_query($conn,$deletequery);
    $_SESSION['msg']="deleted successfully";
    header("Location:./viewcategory.php");
    }

    if(isset($_POST["add"])){
        header("Location:./addcategory.php");
    }
?>
