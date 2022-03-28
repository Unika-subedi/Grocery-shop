<?php
    include './config.php';
    if(isset($_FILES['image'])){    //image xa ki xainxa vanya ra check garya
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($file_tmp,"./images/".$file_name); 

        // echo "success";


    }
        $item-name= $_POST['item name'];
        $purchasedate= $_POST['purchasedate'];
        $price= $_POST['price'];
        $sqlquery = "INSERT INTO images ( image, item name, purchase date, price) VALUES ('$file_name','$item-name','$purchasedate','$price')";
    // $sqlquery = "INSERT INTO images ( image_text) VALUES ('$file_name')";
    
    // echo $sqlquery;

    if (mysqli_query($conn, $sqlquery)){
        // echo "record succesfully";
        // var_dump(mysqli_query($conn, $sqlquery));
    } else {
        echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css">

    </style>
<body>
    <center>
    <form action="" method="post" enctype="multipart/form-data">
       
        <label for="item name">item name</label><br>
        
        <input type="text" name="vegename"/><br><br>
        <label for="price">price</label><br><br>
        <input type="text" name="price"/><br><br>
        <label for="purchasedate">purchased date</label><br><br>
        <input type="date" name="purchasedate"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image"/><br><br>
        
        <input type="submit"/>
    </form>
</center>
</body>
</html>