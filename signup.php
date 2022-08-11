<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" action="signup-check.php">
            <h2>SIGN UP</h2>
              <?php if(isset($_GET['error'])) {   ?>
                <p class="error"><?php echo $_GET['error'];?></p>
              <?php } ?>

               <?php if(isset($_GET['success'])) {   ?>
                <p class="success"><?php echo $_GET['success'];?></p>
              <?php } ?>



               <label>Name:</label>
              <?php if(isset($_GET['name'])) {   ?>
                <input type="text" 
                       name="name" 
                       placeholder="Name"
                       value="<?php echo $_GET['name'];?>"><br>

              <?php }else{ ?>
                  <input type="text" 
                         name="name"
                         placeholder="Name"><br>
              <?php } ?>


              <label>User Name:</label>
               <?php if(isset($_GET['uname'])) {   ?>
               
                <input type="text" 
                       name="uname" 
                       placeholder="User Name"
                       value="<?php echo $_GET['uname'];?>"><br>

              <?php }else{ ?>
                  <input type="text" 
                         name="uname"
                         placeholder="User Name"><br>
              <?php } ?>

              <label>Email:</label>
              <input type="email" name="email" placeholder="abc@email.com">

              <label>Age: </label>
                    <select name="age"> 
                      <option></option>
                      <option value="20">20</option>
                       <option value="21">21</option>
                       <option value="22">22</option>
                       <option value="23">23</option>
                  </select><br><br>

               
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password"><br>

            <label>Confirm Password:</label>
            <input type="password" name="re_password" placeholder="Re_Password"><br>
            <label>i agree! all above mentioned informations are true</label>
            <input type="checkbox" name="checkbox" style="border:2px dotted #00f;background:#ff0000;" required> <br>
                <button type="submit">Sign Up</button>
                <a href="index.php" class="ca">Already have an account</a>

            
            </form>

    
</body>
</html>