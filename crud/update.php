<?php
echo "<pre>";

if(isset($_POST['update']) && $_POST['update']=='update'){
    print_r($_POST);
$sid=$_POST['pid'];
$name=$_POST['pname'];
$price=$_POST['price'];


include_once('connection.php');
$sql="Update student SET  product name='$name',price='$price' where pid='$pid'";
$result=mysqli_query($connection,$sql);
// print_r($result);
if($result){
    header('Location:student_display.php');
}
}
?>
