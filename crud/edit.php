<?php
include_once "connection.php";

if (!empty($_GET['pid'])) {
    $id = $_GET['pid'];
    $query = "SELECT * FROM products WHERE pid=".$id;
    $result = mysqli_query($connection, $query);
    $products = mysqli_fetch_assoc($result);
   

} else {
    $_SESSION['error'] = 'Invalid Access';
    header('Location:index.php');
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- ==============Session Error ============-->
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['error'] ?>
                    <?php unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <h1>Update products</h1>
            <form action="update.php" method="post">
                <input type="hidden" name="criteria" value="<?= $products['pid'] ?>">
                <div class="form-group">
                    <label for="name">product name</label>
                    <input type="text" name="pname" id="pname"
                           value="<?=  $products['pname'] ?>" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="email">price</label>
                    <input type="text" name="price" id="email"
                           value="<?=  $products['price'] ?>" class="form-control form-control-sm">
                </div>
               
                <div class="form-group">
                    <button class="btn btn-primary">Update products</button>
                </div>
            </form>

        </div>
    </div>
</div>


<script src="assests/js/jquery.js"></script>
<script src="assests/js/bootstrap.js"></script>
<script src="assests/js/custom.js"></script>

</body>
</html>
