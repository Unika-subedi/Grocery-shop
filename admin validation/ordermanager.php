<?php
    include '../database/connection.php';
    include '.logincheck.php';

    $id=$_POST['id'];
    // echo $id;
    if (isset($_POST['delete'])){
        $deletequery= "DELETE FROM order_manager WHERE `order_manager`.`order_id` =$id";
    // echo $deletequery;
    $delete=mysqli_query($conn,$deletequery);
    $_SESSION['msg']="Order Deleted successfully";
    header("Location:./orders.php");
    }
    

    ?>