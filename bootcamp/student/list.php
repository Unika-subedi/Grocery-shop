<?php include('./config.php');

?>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>

<table border="1" cellpadding="5px" cellspacing="0">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <td>Address</th>
            <th>District</th>
            <th>image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $selectquery = "select * from student";
            $result = mysqli_query($conn, $selectquery);
            if(mysqli_num_rows($result)){
                while($row= mysqli_fetch_assoc($result)){
        ?>
    <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['district'];?></td> 
            <td><img src="./images/<?php echo $row['image'];?>"></td>
            <td><a href="edit.php?id=<?php echo $row['id']?>">Edit </a><a href="delete.php?id=<?php echo $row['id'];?>" onclick="return checkDelete()">Delete</a></td>
            
        </tr>
            <?php   
    }
}
?>

    </tbody> 
</table>