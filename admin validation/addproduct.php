<?php
// session_start();
error_reporting(0);
    include './admindashboard.php';
    include '.logincheck.php';
    include_once'../database/connection.php';
    if(!$conn){

    }else{
    $sqlquery1= "SELECT * FROM `categories`";
    $result = mysqli_query($conn,$sqlquery1);
    }
    if(isset($_POST['submit']))
    {
      // $files= $_FILES['image'];
      // print_r($files);
      // $msg ="";
      $name = $_POST['name'];
      $quantity = $_POST['quantity'];
      $price = $_POST['price'];
      $category = $_POST['category'];
      

    $image = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $p_image_folder = 'images/products/'.$image;
    // move_uploaded_file($file_tmp,"./images/".$image);  

      $description = $_POST['description'];

        $sqlquery = "insert into product (prdct_name,prdct_qty, prdct_price,prdct_img,prdct_cat,prdct_desc) values('$name','$quantity','$price','$image','$category','$description');";
        // $name = $_POST['name'];
        // $sqlquery = "insert into product (prdct_name) values('$name')";
        $res=mysqli_query($conn,$sqlquery);
         if($res){
          move_uploaded_file($file_tmp,$p_image_folder);
          $_SESSION['msg'] = "Product added successfully.";
          header("location:addproduct.php");

        }
        else{
          $_SESSION['msg']="failed to add record";
        }
    }
?>
<link rel="stylesheet" href="./css/addproduct.css">
<title>Product Details</title>
<body>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
  <div class="addprod">
  <div class="row">
    
    <div class="Product">
    <h2 style="text-align:center; color:red"><?php echo $_SESSION['msg'];
      $_SESSION['msg']=""; ?>
    </h2>
      <label for="fname">Product Name:</label>
    </div>
    <div class="Product-fields">
    <input type="text" name="name" placeholder="Product name" required><br>
    </div>
  </div>

  <div class="row">
    <div class="Product">
      <label for="fname">Product Quantity:</label>
    </div>
    <div class="Product-fields">
    <input type="number" name="quantity" placeholder="Product Quantity" required min=1><br>
    </div>
  </div>

  <div class="row">
    <div class="Product">
      <label for="fname">Product Price:</label>
    </div>
    <div class="Product-fields">
    <input type="number" name="price" placeholder="Product price" required min=1><br>
    </div>
  </div>

  <div class="row">
      <div class="Product">
        <label for="country">Image</label>
      </div>
      <div class="Product-fields">
        <input type="file" name="image" id="image" >
      </div>
  </div>

  <div class="row">
    <div class="Product-fields">
      <label for="Product">Product:</label>
      <select name="category">
      <option value="select category" selected>select category</option>
        <?php
                if(mysqli_num_rows($result)){
                while($row = mysqli_fetch_assoc($result)){
        ?>
                    <option value="<?php echo $row['id'] ?>" ><?php echo $row['categories']?></option>
        <?php 
                }
              }
        ?>
          </select><br />
    </div>
  </div>
 
  <div class="row">
    <div class="Product">
      <label for="subject">Description</label>
    </div>
    <div class="Product-fields">
      <textarea id="subject" name="description" placeholder="Write short description..." style="height:200px" ></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" name="submit" value="submit">
    </div>
    </form>
  </div>
  
  