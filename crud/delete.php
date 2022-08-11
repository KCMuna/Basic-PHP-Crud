
<?php

require_once "connection.php";

if (!empty($_GET['pid'])) {
    $id = $_GET['pid'];
    $query = "DELETE FROM products WHERE pid=" . $id;
    $res = mysqli_query($connection, $query);
    if ($res) {
        $_SESSION['success'] = 'Successfully Deleted';
        header('Location:insert.php');
    } else {
        $_SESSION['error'] = 'There was a problem';
        header('Location:insert.php');
    }
}

