<title>Category Details</title>
<?php
    include'./admindashboard.php';
?>
<link rel="stylesheet" href="./css/checkout.css">  
<title>Categories</title>
<div class="container">

<section class="shopping-cart"> 
<form method="post" action="./deletecategory.php">
        <button name="add" style="border: 1px solid black; background:grey; font-color:white;">Add Category</button>
</form>
    <h1 style="font-size: 30px; font-weight:bold; text-align:center; padding-top: 20px;"> Categories </h1><?php 
// echo"hello";
echo $_SESSION['user_type']?>
   <table>

      <thead>
         <th style="width:10px;">S.N</th>
         <th>Image</th>
         <th>Name</th>
         <th>Created Date</th>
         <th>Action</th>
      </thead>
      <tbody>
      <?php
            include '../database/connection.php';
            $Sql= "select * from categories";
            $res=mysqli_query($conn,$Sql);
            $sn=0;
            while($row=mysqli_fetch_assoc($res)){
                $sn+=1;
                echo"
                <tr>
                    <td>$sn</td>
                    <td><img src='../admin validation/images/categories/$row[image]' style='width:200px; height:auto;'></td>
                    <td>$row[categories]</td>
                    <td>$row[created_date]</td>
                    <td>
                        <form method='post' action='deletecategory.php' enctype='multipart/form-data'>
                            <input type='hidden' name='id' value='$row[id]' />
                            <input type='submit' name='delete' value='Delete'>
                        </form>
                        <form method='post' action='editcategory.php' enctype='multipart/form-data'>
                            <input type='hidden' name='id' value='$row[id]' />
                            <input type='submit' name='update' value='update'>
                        </form>
                    </td>
                </tr>";
                
            }
?>
