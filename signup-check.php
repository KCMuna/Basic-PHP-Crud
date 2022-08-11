<?php
session_start();
include 'connection.php';
if(isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['re_password'])){



function validate($data){
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}


$uname=validate($_POST['uname']);
$pass=validate($_POST['password']);

$email=validate($_POST['email']);
$age=validate($_POST['age']);
$re_pass=validate($_POST['re_password']);
$name=validate($_POST['name']);

$user_data='uname='. $uname.'&name='. $name;

if(empty($name)){
	header("Location:signup.php?error=Name is required&$user_data");
		exit();
}else if(empty($uname)){

	header("Location:signup.php?error=User Name is required && $user_data");
		exit();

}
else if(empty($email)){

	header("Location:signup.php?error=email  is required && $user_data");
		exit();

}else if(empty($age)){
	header("Location:signup.php?error=age is required&$user_data");
		exit();}
else if(empty($pass)){
	header("Location:signup.php?error=Password is required&$user_data");
		exit();
	
}else if(empty($re_pass)){
	header("Location:signup.php?error=Re Password is required&$user_data");
		exit();

}else if($pass!==$re_pass){
	header("Location:signup.php?error=The Confirmation password does not match&$user_data");
		exit();
}else{
	//hasing the password

	 $pass = md5($pass);

	$sql="SELECT * FROM dname WHERE username='$uname' AND password='$pass'";
	$result=mysqli_query($connection, $sql);
	// print_r($result);
	// die();

		if(mysqli_num_rows($result)>0){
			header("Location:signup.php?error=The username is already taken try another&$user_data");
		exit();
		}else{
			$sql2="INSERT INTO dname(username,password,name,email,age) VALUES('$uname','$pass','$name','$email','$age')";
			$result2=mysqli_query($connection, $sql2);
          if($result2){
			header("Location:signup.php?success=Your account has been created successfully");
					exit();
          }else{
		          	header("Location:signup.php?error=Unknown error occured&$user_data");
				exit();

          }
		}

    }

}else{
	header("Location:signup.php");
	exit();
}
	?>