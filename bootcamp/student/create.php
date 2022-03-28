<?php include"../config.php";?>

<form action="create.php" method="POST" >
<label for="fname">Name:</label>
&nbsp;&nbsp;&nbsp;<input type="text" id="name" name="name" ><br><br>
<label for="address">Address:</label>
<input type="text" id="address" name="address" ><br><br>

<select name="district" id="district" value=<?php echo $row['district']?>>
                            <option value="select district" selected>please select district</option>
                            <option value="ktm" >kathmandu</option>
                            <option value="bhaktapur">bhaktapur</option>
                            <option value="lalitpur" >lalitpur</option>
                            <option value="dolakha">dolakha</option><br><br>
</select><br><br>
<?php
$file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($file_tmp, "../images/" . $file_name);
            ?><br /><br />
            
<input type="submit" name="submit" value="submit">

</form> 
<?php
     if (isset($_POST['submit'])) {
        // echo "submitted";
        
        $name =  $_POST['name'];
        $address = $_POST['address'];
        $district = $_POST['district'];
        $image = $_POST['FILE_NAME'];
        if(empty($name)|| empty($address)){
            echo"...........";
            exit();
        }else{
    
        

        $sql = "INSERT INTO `student` (`name`,`address`,`district`,`image`) VALUES('".$name."','".$address."','".$district."','".$image."')";

        // echo $sql;

        if(mysqli_query($conn,$sql)){
            // echo "success";
        }
        else{
            echo "not connected";
        }
     }
    }
?>
