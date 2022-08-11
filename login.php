<?php      

session_start();
if(isset($_SESSION['username'])){
    header('Location:index.php');
}
include_once('connection.php');

if(isset($_POST['login'])){
    function validate($data){
        $data = trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['uname']);  
     $pass= validate($_POST['password']);  
      if(empty($username)){
          header('Location:index.php?error=username req');
          exit();
      }
     else if(empty($pass)){
        header('Location:index.php?error=pass req');
        exit();
    }else{
      
	
	$pass = md5($pass);
    
        $sql = "SELECT * FROM dname WHERE username = '$username' and password = '$pass'"; 
       
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        // print_r($row); die;
        // $_SESSION['uid']=$row['uid'];
        $count = mysqli_num_rows($result);  
       
          
        if($count == 1){  
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['username'] = $row['username'];

             
            header('Location:home.php');
            exit();
        }  
        else{  
            //   $_SESSION['error'] = "Invalid Username or Password";
              
            header('Location:index.php?error=incorrect username or password');
            exit();
        }  
    } 
}else{
    header('Location:index.php');
    exit();
}  
?>