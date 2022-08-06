<?php
session_start();
    include '../database/connection.php';
    include './header.php';
    
?>
<link rel="stylesheet" href="../css/checkout.css">  
<title>shopping cart</title>
<div class="container">

<section class="shopping-cart">


   <h1 class="heading">shopping cart</h1>

    <h1 class="msg">
   <?php
   if ($_SESSION['msg']!='')
   {

      echo $_SESSION['msg'];
      $_SESSION['msg']='';
      // echo"<br><button name='ok' class='button'>ok</button>";
   }
      ?>
</h1>

   <table>

      <thead>
         <th style="width:10px;">S.N</th>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th style="width:10px;">quantity</th>
         <th>total price</th>
         <th>Delete</th>
      </thead>

      <tbody>

      <?php
      $total=0;
      if(isset($_SESSION['cart'])){
         foreach($_SESSION['cart'] as $key => $value){
            $SN=$key+1;
            $total=$total+$value['Price'];
           
            echo"
                       <tr>
                        <td>$SN</td>
                        <td><img src='../admin validation/images/products/$value[image]' style='width:200px; height:auto;'></td>
                        <td>$value[Item_Name]</td>
                        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                        <td>
                           <form action='manage_cart.php' method='POST' enctype='multipart/form-data'>
                              <input type='number' class='iquantity' name='Mod_Quantity' onchange='this.form.submit();' value='$value[Quantity]' min='1' max='20'/></td>
                              <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                           </form>
                        <td class='itotal'></td>
                        <td>
                        <form action='manage_cart.php' method='POST' enctype='multipart/form-data'>
                           <button name='Remove_Item'>REMOVE</button></td>
                           <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                        </form>
                        </tr>
                        ";
         }
      }

   ?>
   
    <tr class="table-bottom">
            <td colspan="2"><form action='manage_cart.php' method='POST' enctype='multipart/form-data'>
            <button type="submit" class="btn btn" name="save">Continue Shopping</button></form></td>
            
            <td colspan="2">grand total</td>
            <td id='gtotal'>$/-</td>
            
    </tr>

      </tbody>

   </table>
<!-- </form> -->
<div class="container">  
<?php
         if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
         ?>
<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

      <!-- <link rel="stylesheet" href="../css/checkout.css"> -->
   <form action="purchase.php" method="post" enctype="multipart/form-data">


         <div class="flex">
            <div class="inputBox">
               <span>your name</span>
               <input type="text" placeholder="enter your name" name="full_name" required>
            </div>
            <div class="inputBox">
               <span>your number</span>
               <input type="number" placeholder="enter your number" name="phone_no" max="9999999999" required>
            </div>
            <div class="inputBox">
               <span>Address</span>
               <input type="text" placeholder="order receive location" name="address" required>
            </div>
            <div class="inputBox">
               <span>payment method</span>
               <select name="pay_mode">
               <!-- <option value="select payment" selected>select payment method</option> -->
                  <option value="cash on delivery" >cash on delivery</option>
               </select>
            </div>
         </div>
      <input type="submit" value="order now" name="purchase" class="btn">
   </form>
</section>
<?php
         }
?>

</div>
<script type="text/javascript">
   var gt=0;
   var iprice=document.getElementsByClassName("iprice");
   var iquantity=document.getElementsByClassName('iquantity');
   var itotal=document.getElementsByClassName('itotal');
   var gtotal=document.getElementById('gtotal');

   function subTotal(){
      gt=0;
      for(i=0;i<iprice.length;i++){
            itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
         }
         gtotal.innerText=gt;
   }

   subTotal();

</script>

<!-- custom js file link  -->
<!-- <script src="js/script.js"></script> -->
   
</body>
</html>
