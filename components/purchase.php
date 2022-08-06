<?php
    session_start();
    include('../database/connection.php');

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!isset($_SESSION['username']))
        {
            // not logged in
            header('Location: ../components/login.php');
            exit();
        }else{
        if(isset($_POST['purchase'])){
            $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
            if(mysqli_query($conn,$query1)){
                $Order_Id=mysqli_insert_id($conn);
                $query2= "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
                $stmt=mysqli_prepare($conn,$query2);
                if($stmt){
                        mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
                        foreach($_SESSION['cart'] as $key => $values){
                            $Item_Name=$values['Item_Name'];
                            $Price=$values['Price'];
                            $Quantity=$values['Quantity'];
                            mysqli_stmt_execute($stmt);
                        }
                        unset($_SESSION['cart']);
                        $_SESSION['msg']="order placed";
                        header("Location:shopping-cart.php");
                        // echo"
                        // <script> alert('order placed');
                        // window.location.href='./shopping-cart.php';
                        // </script> 
                    // ";
                }
                else{
                    $_SESSION['msg']="sql prepare error";
                    // echo"
                    // <script> alert('sql prepare error');
                    // window.location.href='./shopping-cart.php';
                    // </script>
                // ";  
                }
            }else{
                $_SESSION['msg']="connection Failed";
                // echo"
                //             <script> alert('connection failed');
                //             window.location.href='./shopping-cart.php';
                //             </script> 
                //         ";
            }
        }
    }
    }

?>