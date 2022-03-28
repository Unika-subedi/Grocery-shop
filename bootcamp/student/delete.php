<?php include("../config.php");

    $id =$_GET['id'];
    $delete = "DELETE FROM student WHERE id= $id";
    echo $delete;
    if(  mysqli_query($conn, $delete)){
        echo"deleted";}
        
        else{
        echo "no data found";
    }
    header("Location:list.php");

    ?>