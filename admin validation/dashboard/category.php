<?php
	include_once('../config.php');
	include_once('./functions.inc.php');
	include_once('./dashboard.php');
// require('top.inc.php');
$categories='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from categories where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories=$row['categories'];
	}else{
		header('location:category.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories=get_safe_value($conn,$_POST['categories']);
	$res=mysqli_query($con,"select * from categories where categories='$categories'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($conn,$res);
			if($id==$getData['id']){
			
			}else{
				$msg="Categories already exist";
			}
		}else{
			$msg="Categories already exist";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			mysqli_query($con,"update categories set categories='$categories' where id='$id'");
		}else{
			$result ="insert into categories (categories) values('$categories')";
			 mysqli_query($conn,$result);
		}
		// echo($result);
		header('location:category.php');
		die();
	}
}
?>
  <style>
    * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.category {
  float: left;
  width: 50%;
  margin-top: 6px;
}

.category-fields {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
body{
	padding-left: 20%;
}


@media screen and (max-width: 600px) {
  .category, .category-fields, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
  </style>
<body>
<div class="container">
  <form action="/action_page.php">
  <div class="row">
    <div class="category">
      <label for="fname">Category Name</label>
    </div>
    <div class="category-fields">
      <input type="text" id="fname" name="category-name" placeholder="category name" required>
    </div>
  </div>
  <div class="row">
    <div class="category">
      <label for="date">created at:</label>
       <input type="date" name="created date" required/>
    </div>
    <div class="category-fields">
     
    </div>
  </div>
  <div class="row">
    <div class="category">
      <label for="country">Image</label>
    </div>
    <div class="category-fields">
      <input type="file" name="image" required />
      
    </div>
  </div>
  <div class="row">
    <div class="category">
      <label for="subject">Description</label>
    </div>
    <div class="category-fields">
      <textarea id="subject" name="description" placeholder="Write something.." style="height:200px" ></textarea>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>

