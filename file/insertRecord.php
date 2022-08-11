<?php
//include connection
include 'connection.php';

//has form been submitted?
if(isset($_POST['subUser']))
$id=$_POST['txtID'];
$name=$_POST['txtName'];
$pass=$_POST['txtPass'];

//produce query to Insert into table
$query="INSERT INTO users
            (userID,userName,userPass)
        VALUES
            ('$id','$name','$pass')";

//echo $query;
//exit();

//run query  through connection
mysqli_query($connection, $query);

//Navigate to started location
header('location:mysql.php');









?>