
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
            <!-- ==============Session Success ============-->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                    <?php unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>
            <!-- ==============Session Error ============-->
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['error'] ?>
                    <?php unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <h1>Add product</h1>
                    <form action="insert.php" method="POST">
                        <div class="form-group">
                            <label for="name"> produt Name</label>
                            <input type="text" name="pname" id="pname"
                                   class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="price">price</label>
                            <input type="text" name="price" id="price"
                                   class="form-control form-control-sm">
                        </div>
            
                       
                        
                        <div class="form-group">
                            <button class="btn btn-success">Add product</button>
                        </div>
                    </form>


<script src="assests/js/jquery.js"></script>
<script src="assests/js/bootstrap.js"></script>
<script src="assests/js/custome.js"></script>

</body>
</html>