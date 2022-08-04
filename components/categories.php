<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>
<?php 
    include '../database/connection.php';
    // session_start();
    require('./header.php');

    $sql= "select * from categories" ;
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
?>
<section class="categories" id="categories">

    <div class="box-container">
        
        <div class="box">
        <img src="../admin validation/images/categories/<?php echo $row['image'];?>">
            <h3><?php echo $row['categories']?></h3>
            <p>upto 45% off<br/>
            <?php echo $row['categories_description']?><br>
            purchased date: <?php echo $row['created_date']?>
        </p>
            <a href="./productscat.php?product_category=<?php echo $row['categories']?>" class="btn">shop now</a>
        </div>
        </section>
        <?php
        }
    }
    ?>
    </section>
        