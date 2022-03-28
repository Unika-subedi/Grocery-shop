<?php session_start(); 
include './header.php';

$file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($file_tmp, "../images/" . $file_name);
            ?><br /><br />
            ?>
<input type="submit" name="submit" value="submit">

?>
<!-- <div class="header">
                Hello <?php echo $_SESSION['Username']; ?>
            </div> -->

            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admintable.css">
    <title>Cart </title>
    
</head>
<link rel="stylesheet" href="../css/cart.css"/>
<body>
    <div class="title">
        <h1>Cart items</h1>
    </div>
    
    <div class="main">
    <table class="content-table">
        <thead>
            <tr>
                <th>S.N</th>
                <!-- <th>Id</th> -->
                <th>Name</th>
                <th>Items</th>
                <th>Quantity</th>
                <th>Price</th>
                <!-- <th>Total</th> -->
                <th>Action</th>
            </tr>
        </thead>
    </div>

    <?php
    include "../database/connection.php";

    $selectQuery = "SELECT * FROM cartitems";

    $result = mysqli_query($conn, $selectQuery);  //

    if(mysqli_num_rows($result)){
        $i = 1;
        while($row = mysqli_fetch_assoc($result)){
        

?>
    <tbody>
    <tr>
        <td><?php echo $i;?></td>
        <!-- <td><?php echo $row ['Id'];?></td> -->
        <td><?php echo $row ['name']?></td>
        <td><?php echo $row ['items']?></td>
        <td><?php echo $row ['quantity']?></td>
        <td><?php echo $row ['price']?></td>
        
        <td>   
            <button><a href="edit.php?id=<?php echo $row['Id'];?>">Edit</a></button> 
            <button>
                <a href="delete.php?id=<?php echo $row['Id'];?>" onclick="return confirm('Do you want to delete ?')";>Delete</a>
            </button>
        </td>
    </tr>
        <?php
        $i++;
        }
    }
        ?>
    </tbody>
    </table>
</body>
</html>