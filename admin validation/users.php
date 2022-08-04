<title>Users</title>
<?php
    include'./admindashboard.php';
?>
<link rel="stylesheet" href="./css/checkout.css">  
<div class="container-list">
<section class="shopping-cart">
    <h1 style="font-size: 30px; font-weight:bold; text-align:center; padding-top: 20px;"> Users </h1>
   <table>
      <thead>
         <th style="width:10px;">S.N</th>
         <th>Username</th>
         <th>user type</th>
         <th>Action</th>
      </thead>
      <tbody>
<?php
    include '../database/connection.php';
    $Sql= "select * from tb_customer";
    $res=mysqli_query($conn,$Sql);
    $sn=0;
    while($row=mysqli_fetch_assoc($res)){
        $sn+=1;
        echo"
        <tr>
        <td>$sn</td>
            <td>$row[Username]</td>
            <td>$row[user_type]</td>
            <td>
            <form action='manageuser.php' method='POST' enctype='multipart/form-data'>
                <input type='hidden' name='id' value='$row[id]' />
                <button class='btn' type='submit' name='delete'>Delete</button>
            </form>
            
            </td>
        </tr>";
        
    }
?>
</tbody>
</table>