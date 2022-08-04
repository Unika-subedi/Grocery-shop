<?php
    include'../database/connection.php';
    // include'./header.php';
	session_start();
?>
<link rel="stylesheet" href="../css/product.css"/>
<body>
    <?php
        // if(isset($message)){
        //     foreach($message as $message){
        //         echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display=`none`;"></i></div>';
        //     }
        // }
        
    ?>

    <div class="product-page">
    <div class="search">
        
        <form action="allproducts.php" method="get">
            <input type="hidden" name="pages" value="1"> 
            <input type="text" name="search" value="" placeholder="Search through name">
            <button type="submit">Search</button>
        </form> 
    </div>
    <?php

    ?>
    
        <!-- products section starts  -->
        <h1 class="heading"> our <span>products</span> </h1>
            <section class="products" id="products">
                    <div class="product_grid">
                        <div class="product-container1">
                            <?php
                            if(isset($_GET['search'])){
                                $search = $_GET['search'];
                             
                            }else{
                                $search="";
                            }
                             $sql= "select * from product where `prdct_name` like '%$search%' ";

                             $result= mysqli_query($conn,$sql);
                             // echo$sql;
                            if(mysqli_num_rows($result))
                            {
                                while($row = mysqli_fetch_assoc($result))
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
                            }else{
                                ?>
                                <div class="wrapper_box">
                                    <h3>No Records found</h3>
                                </div>
                                
                                <?php }
                                ?>
                            
                        </div>
                        <?php
                           
                        ?>

                    </div>
            
            </section>
    </div>
<!-- </form> -->
<!-- products section ends -->
