<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h1>Insert a record</h1>
    <a href="../home.php">Go to Home</a>
    <!--set up form id, name, pass-->
    <form method="post" action="insertRecord.php">
    <input placeholder="id" type="text" name="txtID"/>
    <br/>
    <input placeholder="name" type="text" name="txtName" />
    <br />
    <input  placeholder="password" type="text" name="txtPass" />
    <br />
    <input type="submit" value="submit" name="subUser" />
    </form>
    <?php
    include 'connection.php';
    ?>
</body>
</html>