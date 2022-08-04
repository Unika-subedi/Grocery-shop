<title>Product Details</title>
<?php
    include './admindashboard.php';
?>
<link rel="stylesheet" href="./css/checkout.css">  
<title>Products</title>
<div class="container">

<section class="shopping-cart">
    <form method="post" action="./deleteproduct.php">
        <button name="add">Add Product</button>
    </form>

   <h1 class="heading">Products</h1>
   <table>
      <thead>
         <th style="width:10px;">S.N</th>
         <th>Image</th>
         <th>Name</th>
         <th>Price</th>
         <th>Action</th>
      </thead>
      <tbody>
<?php
    include '../database/connection.php';
    $Sql= "select * from product";
    $res=mysqli_query($conn,$Sql);
    $sn=0;
    while($row=mysqli_fetch_assoc($res)){
        $sn+=1;
        echo"
        <tr>
        <td>$sn</td>
            <td><img src='../admin validation/images/products/$row[prdct_img]' style='width:200px; height:auto;'></td>
            <td>$row[prdct_name]</td>
            <td>$row[prdct_price]</td>
            <td>
            <form action='deleteproduct.php' method='POST' enctype='multipart/form-data'>
                <input type='hidden' name='id' value='$row[prdct_id]' />
                <input type='submit' name='delete' value='Delete'>
            </form>
            <a href='./editproduct.php?id=$row[prdct_id]&cat_id=$cat_id'> EDIT</a>
            </td>
        </tr>";
        
    }
?>
</tbody>
</table>