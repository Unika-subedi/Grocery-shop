<title>Order Details</title>
<?php
    include './admindashboard.php';
    include '../database/connection.php';
?>

<link rel="stylesheet" href="./css/checkout.css">
<div class="container-list">
    <div class="orderlist">

<section class="shopping-cart" style="">
    <h1 style="font-size: 30px; font-weight:bold; text-align:center; padding-top: 20px;"> Users Orders </h1>

   <table>
      <thead>
         <th>Order Id</th>
         <th>Customer Name</th>
         <th>Phone Number</th>
         <th style="width:10px;">Address</th>
         <th style="width:10px;">Pay Mode</th>
         <th>Orders</th>
         <th colspan="4">Action</th>
      </thead>

      <tbody>
        <?php
            $sn=0;
            $query="select * from order_manager";
            $user_result=mysqli_query($conn,$query);
            while($user_fetch=mysqli_fetch_assoc($user_result)){
                $sn+=1;
                echo"<tr>
                        <td>$user_fetch[order_id]</td>
                        <td>$user_fetch[Full_Name]</td>
                        <td>$user_fetch[Phone_No]</td>
                        <td>$user_fetch[Address]</td>
                        <td>$user_fetch[Pay_Mode]</td>
                        <td>
                            <table>
                                <thead>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                   
                                </thead>
                                <tbody>
                                <tr>
                                ";                 
                                                    $order_query= "select * from `user_orders` where `Order_Id`=$user_fetch[order_id]";
                                                    $order_result=mysqli_query($conn,$order_query);
                                                    while($order_fetch= mysqli_fetch_assoc($order_result)){
                                                        echo"
                                                            <tr>
                                                                <td>$order_fetch[Item_Name]</td>   
                                                                <td>$order_fetch[Price]</td>   
                                                                <td>$order_fetch[Quantity]</td> 
                                                            </tr>
                                                        ";
                                                    }
                                    echo"
                                    </tr>  
                                </tbody>
                            </table>
                        </td>
                        <td>
                        <form action='ordermanager.php' method='post' >
                            <input type='hidden' name='id' value='$user_fetch[order_id]'><br>
                            <button class='btn' name='delete' value='delete'>Delete</button></td>
                        </form>
                    </tr>";
            }
                ?>
                </section>
                </div>
                </div>

                        
                        