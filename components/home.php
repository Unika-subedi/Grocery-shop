<?php
session_start();
include_once('../database/connection.php');
 include_once('header.php');
 
// if(!$_SESSION['username']==="user"){
//     header('location: ./home.php');
// }elseif(!$_SESSION['username']==="admin"){
//     header('location: ../admin validation/admindashboard.php');
// }
// if(!isset($_SESSION['username'])){
//     header('Location: login.php');
//     exit();
// }
?>

    
    <!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
        <?php 
        // echo $_SESSION['username']
        ?>
        <h3>fresh and <span>organic</span> products for your</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
        <a href="allproducts.php" class="btn">shop now</a>
    </div>

</section>

<!-- home section ends -->
<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> our <span>features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/feature-img-1.png" alt="">
            <h3>fresh and organic</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>cash on Delivery</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<?php
   include_once('./categories.php');
    ?>
    

<?php
    include_once('./footer.php'); ?>    

<!-- features section ends -->


<!-- </body> -->
<?php
    echo '<script type="text/javascript" src="./js/script.js">'
?>
<!-- </html> -->