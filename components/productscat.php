<?php
    require_once('header.php'); 
    session_start();
    include('../database/connection.php');
?>
<link rel="stylesheet" href="../css/product.css"/>
<body>
    <div class="product-page">
        <!-- products section starts  -->
        <h1 class="heading"> our <span>products</span> </h1>
            <section class="products" id="products">
                    <div class="product_grid">
                        <div class="product-container1">
                            <?php

                             $catname ="";
                             $prdct_id ="";
                             if(isset($_GET["product_category"])){
                                 $catname = $_GET["product_category"];
                             }
                         
                             $sql= "select * from product where prdct_cat = (select id from categories where categories='$catname') ";
                             $result1= mysqli_query($conn,$sql);
                             
                            if(mysqli_num_rows($result1))
                            {
                                while($row = mysqli_fetch_assoc($result1))
                                {
                            ?>
                                          <form action="manage_cart.php"method="POST" enctype="multipart/form-data">
                                            <div class='wrapper_box' >
                                                <img src='../admin validation/images/products/<?php echo $row['prdct_img']?>' alt=''>
                                                <h3><?php echo $row['prdct_name']?></h3><br>
                                                <div class='price'> Rs <?php echo $row['prdct_price']?></div>
                                                <button type="submit" class="btn btn-primary" name="Add_To_Cart">Add To Cart</button>
                                                <input type="hidden" name="Item_Name" value="<?php echo $row['prdct_name']?>" />
                                                <input type="hidden" name="image" value="<?php echo $row['prdct_img']?>" />
                                                <input type="hidden" name="Price" value="<?php echo $row['prdct_price']?>" />
                                            </div>
                                        </form>
                            <?php
                                    }
                                }
                            ?> 
                        </div>

                    </div>
            
            </section>
    </div>
<!-- products section ends -->
