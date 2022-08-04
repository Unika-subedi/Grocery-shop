<?php
        session_start();
        // session_destroy();
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(isset($_POST['Add_To_Cart'])){
                
                if(isset($_SESSION['cart'])){
                    $myitems=array_column($_SESSION['cart'],'Item_Name');
                        if(in_array($_POST['Item_Name'],$myitems)){
                            
                            echo"
                            <script> alert('item already added');
                            window.location.href='./shopping-cart.php';
                            </script> 
                        ";  
                        }
                        else{
                            $count=count($_SESSION['cart']);
                            $_SESSION['cart'][$count]=array('image'=>$_POST['image'],'Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                            
                            $_SESSION['msg']="item added";
                            header('location:./shopping-cart.php');
                    //         echo"
                    //     <script> alert('item added');
                    //     window.location.href='./shopping-cart.php';
                    //     </script> 
                    // ";  
                        }
                }else{
                    $_SESSION['cart'][0]=array('image'=>$_POST['image'],'Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                    
                    echo"
                    <script> alert('item added');
                    window.location.href='./shopping-cart.php';
                    </script> 
                ";  
                }

            }

            //remove items from cart
            if(isset($_POST['Remove_Item'])){
                foreach($_SESSION['cart'] as $key => $value){
                    if($value['Item_Name']==$_POST['Item_Name']){
                        unset($_SESSION['cart'][$key]);
                        $_SESSION['cart']=array_values($_SESSION['cart']);
                        
		                echo"
                            <script> alert('item removed');
                            window.location.href='./allproducts.php';
                            </script>";
                    }
                }
            }  

            // change the quantity
            if(isset($_POST['Mod_Quantity'])){
                foreach($_SESSION['cart'] as $key => $value){
                    if($value['Item_Name']==$_POST['Item_Name']){
                        $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];
                        echo"<script> 
                                window.location.href='shopping-cart.php';
                            </script>";
                    }
                }
            }
            if(isset($_POST['save'])){
                header("Location:./allproducts.php");
            }
        }
?>