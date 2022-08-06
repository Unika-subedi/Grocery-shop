<?php
include './admindashboard.php';
include '.logincheck.php';
if(isset($_POST['submit'])) {
    include ("../database/connection.php");
    $name = $_POST['category_name'];
    $description=$_POST['categories_description'];
    // $created_date = $_POST['created_date'];

    // $now_date = date();
    // echo $now_date;

    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($file_tmp,"./images/categories/".$file_name);  

        // $sqlquery = "INSERT INTO student SET name=$name, address=$address";
        $sqlquery = "INSERT INTO categories (categories, image , categories_description) VALUES ('$name', '$file_name','$description')";

        // echo $sqlquery;

        if (mysqli_query($conn, $sqlquery)){
            $_SESSION['msg'] = "record added successfully";
            // echo "record succesfully";
        } else {
            echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
        }
}

?>
    <link rel="stylesheet" href="./css/addcategory.css">
    <fieldset>
        <div class="padding-overall">
        <h2 style="color:red">
	<?php
   if ($_SESSION['msg']!='')
   {

      echo $_SESSION['msg'];
      $_SESSION['msg']='';
   }
      ?>
	  </h2>
        <legend><h1>Add Category</h1></legend>
        <form action=" " method="POST" enctype="multipart/form-data">
            <table>
                <div class="row">
                <div class="category">
                <label for="name">Category Name</label>
                </div>
                <div class="category-fields">
                <input type="text" id="name" name="category_name" placeholder="category name" required>
                </div>
            </div>

          

            <div class="row">
                <div class="category">
                <label for="image">Image</label>
                </div>
                <div class="category-fields">
                    <input type="file" name="image"/></td>
                </div>
            </div>
                
            <div class="row">
                <div class="category">
                    <label for="subject">Description</label>
                </div>
                <div class="category-fields">
                    <textarea id="subject" name="categories_description" placeholder="Write something.." style="height:200px" ></textarea>
                </div>
            </div>
                
        

                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
</div>
    </fieldset>
</body>
</html>