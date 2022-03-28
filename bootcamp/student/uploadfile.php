

        <?php
            if(isset($_FILES['image'])){
                $file_name = $_FILES['image']['name'];
                $file_tmp=$_FILES['image']['tmp_name'];

                move_uploaded_file($file_tmp,"images/".$file_name);
                echo "Uploaded";
            }

?>
<html>
<body>

            <form method="POST" action="#" enctype="multipart/form-data">
                <input type="file" name="image" />
                <button type="submit" name="submit">Submit</button>
            </form>
            <?php
            if(isset($_FILES['image'])){
                $file_name = $_FILES['image']['name'];
                $file_tmp=$_FILES['image']['tmp_name'];

                move_uploaded_file($file_tmp,"images/".$file_name);
                echo "Uploaded";
            }
            ?>
           

?>

</body>
</html>