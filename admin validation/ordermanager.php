<?php
    include '../database/connection.php';

    $id=$_POST['id'];
    // echo $id;
    if (isset($_POST['delete'])){
        $deletequery= "DELETE FROM order_manager WHERE `order_manager`.`order_id` =$id";
    // echo $deletequery;
    $delete=mysqli_query($conn,$deletequery);
    header("Location:./orders.php");
    }
    

    ?>