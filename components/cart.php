<?php session_start(); 
include './header.php';
?>


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
<style>
    h1{
        text-align:center;
        background-color:dark;
        text-color:white;
    }
    div{
        text-align:center;
    }
    </style>
<body>
    
    
    <div class="container">
        <br>
        <h1 class="text-white bg-dark text-center">
            Order Form for Vegetables
        </h1>
        <div class="col-lg-8 m-auto-d-block">
<form action="viewcart.php" method="post" enctype="multipart/form-data">



<div class="form-group">
    <label for="user"> Username:  </label><br>
    <input type="text" name="username" id="user" class="form-control">
</div>
 
<div class="form-group">
    <label for="items"> Items:  </label><br>
    <input type="text" name="items" id="items" class="form-control">
</div>

<div class="form-group">
    <label for="quantity"> Quantity:  </label><br>
    <input type="text" name="quantity" id="quantity" class="form-control">
</div>

<div class="form-group">
    <label for="price"> Price:  </label><br>
    <input type="text" name="price" id="price" class="form-control">
</div>

<div class="form-group">
    <label for="file"> Profile Pic:  </label><br>
    <input type="file" name="file" id="file" class="form-control">
</div>

<buttom id="submit" name="submit" value="Submit" class="btn-success">Submit</button>
    
</body>
</html>