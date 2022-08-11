
<?php

if(!empty($_POST)){
$tmp_address=$_FILES['photo']['tmp_name'];
$fname = $_FILES['photo']['name'];
$error = $_FILES['photo']['error'];
if($error != 0 ){
  exit();
}
$fname = date('y-m-d-his').$fname;

if(isset($_POST['submit']) && $_POST['submit']=='submit'){
$name=$_POST['name'];

$photo=$fname;
$price=$_POST['price'];
$category=$_POST['category'];


include_once('connection.php');
if(is_dir('images')){

}else{
  mkdir('images');
}
move_uploaded_file($tmp_address,'images/'.$fname);
$sql="INSERT INTO product(name,photo,price,category) Values('$name','$photo','$price','$category')";
$result=mysqli_query($connection,$sql);
}

}

?>

            <form  action=""method="POST" enctype="multipart/form-data" >
            <h2>Product</h2>
            <div>
               Product Name:<br><br><input type="text" name="name" placeholder="Enter your name here" required><br><br>
              Photo:<br><br><input type="file" name="photo" placeholder="add your photo here" required><br><br>
             Price:<br><br><input type="text" name="price" placeholder="Enter price  here" required><br><br>
            Category:<br><br><input type="text" name="category" placeholder="add category here" required><br><br>

               
                <input type="submit" name="submit" value="submit" class="btn btn-xs btn-primary">

            </div>
            </form>
       
       
    
   