<?php
include_once "connection.php";

$sql="Select * from products";
$result=mysqli_query($connection,$sql);

if (!empty($_POST)) {
    $name = $_POST['pname'];
    $price=$_POST['price'];
   
    $insertQuery = "INSERT INTO products(pname,price)
                VALUES('$name','$price')";
    $response = mysqli_query($connection, $insertQuery);
    if ($response  == true) {
       echo "data inserted";
    } else {
      echo"try again";
    }
} else {
    header('Location:index.php');
    exit();
}?>
<table class="table table-hover">
<thead>
<tr>
    <th>pid</th>
    <th> product name</th>
    <th>price</th>

    <th>Action</th>     
</tr>
</thead>
<?php while($data=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?php echo $data['pid']?></td>
<td><?php echo $data['pname']?></td>
<td><?php echo $data['price']?></td>

<td><a  href="edit.php?pid=<?php echo $data['pid'];?>" onclick="return confirm('Are you sure you want to edit?')">Edit</a></td>
<td><a  href="delete.php?pid=<?php echo $data['pid'];?>"style="color:red" onclick="return confirm('Are you sure you want to Delete?')">Delete</a></td>
</tr>
<?php }?>
</table>
</div>

