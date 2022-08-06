<?php
  $id=$_GET['id'];
  // echo $id;

include '../database/connection.php';
include '.logincheck.php';

  $sqlquery1= "SELECT * FROM `categories`";
  $result = mysqli_query($conn,$sqlquery1);
  $Sql= "select * from product where prdct_id=$id";
  $res=mysqli_query($conn,$Sql);
  $sn=0;
  while($row=mysqli_fetch_assoc($res)){
    
    $name = $row['prdct_name'];
    $quantity = $row['prdct_qty'];
    $price = $row['prdct_price'];
    $product_category= $row['prdct_cat'];
    $image = $row['prdct_img'];
    $description = $row['prdct_desc'];
  }
?>
<link rel="stylesheet" href="./css/addproduct.css">
<title>Product Details</title>
<body>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">

  <div class="row">
    <div class="Product">
      <label for="fname">Product Name:</label>
    </div>
    <div class="Product-fields">
    <input type="text" name="product_name" placeholder="Product name" value="<?php echo $name?>" required><br>
    </div>
  </div>

  <div class="row">
    <div class="Product">
      <label for="fname">Product Quantity:</label>
    </div>
    <div class="Product-fields">
    <input type="number" name="product_quantity" placeholder="Product Quantity" value="<?php echo $quantity?>" required min=1><br>
    </div>
  </div>

  <div class="row">
    <div class="Product">
      <label for="fname">Product Price:</label>
    </div>
    <div class="Product-fields">
    <input type="number" name="product_price" placeholder="Product price" value="<?php echo $price?>" required min=1><br>
    </div>
  </div>

  <div class="row">
      <div class="Product">
        <label for="country">Image</label>
      </div>
      <div class="Product-fields">
        <input type="file" name="image" ><br><br>
        <img src="./images/products/<?php echo $image; ?>" alt="Product">
      </div>
  </div>

  <div class="row">
    <div class="Product-fields">
      <label for="Product">Product category:</label>
      <select name="category">
        <?php
                if(mysqli_num_rows($result)){
                while($rows = mysqli_fetch_assoc($result)){
        ?>
                     <option value="<?php echo $rows['id']?>">
                     <?php echo $rows['categories']?>
                    </option>
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
      <textarea id="subject" name="product_description" style="height:200px"><?php echo $description;?></textarea><br>
    </div>
  </div>
  <br>
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <div class="row">
    <input type="submit" name="update" value="Update">
  </div>
    </form>
</div>

<!-- php code to update the product -->

<?php
    if(isset($_POST['update'])){

      $id=$_POST['id'];

      $product_name = $_POST['product_name'];
      $product_quantity = $_POST['product_quantity'];
      $product_price = $_POST['product_price'];

      $image = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $p_image_folder = 'images/products/'.$image;

      $product_category = $_POST['category'];
      $product_description = $_POST['product_description'];

      $update = "UPDATE `product` SET `prdct_name`='$product_name',`prdct_qty`='$product_quantity',`prdct_price`='$product_price',`prdct_img`='$image',`prdct_cat`='$product_category',`prdct_desc`='$product_name' WHERE prdct_id = $id";
      if($product=mysqli_query($conn,$update)){
        move_uploaded_file($file_tmp,$p_image_folder);
        $_SESSION['msg']="Updated Successfully";
        header('location:viewproduct.php');
      }else{
        
      $_SESSION['msg']="failed To Edit";
      }

    }
?>