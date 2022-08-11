<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<h2 class="text-center text-info">Product Information</h2>

    <a href="./home.php">Go to Home</a><br>
    <a href="product.php">Add product</a><br>  <br>  

        <?php
        
        // $result = selectQuery($_POST);

        $query = "SELECT * from product where 1=1 ";
        if(!empty($_POST)){
            if (!empty($_POST['search'])){
                $query = $query. " and name like '%".$_POST['search']."%'";
            }
            if (!empty($_POST['category'])){
                $query = $query. " and category like '%".$_POST['category']."%'";
            }
            if (!empty($_POST['priceorder'])){
                $query = $query." ORDER By price ".$_POST['priceorder'];

            } 
            

            
        }
    
        $result=mysqli_query($connection,$query);
 
        ?>

        <form class="form-wrapper" action="sortSearch.php" method="post" >
        <?php
            error_reporting(0);

        ?>
        <input type="text" name="search" placeholder="Search">
        
    
			<select name="category">
            <option value="">--select category --</option>
                <option value="Samsung">Samsung</option>
                <option value="Apple">Apple</option>
                <option value="Motorola">Motorola</option>
                <option value="Sony">Sony</option>
                <option value="Lenovo">Lenovo</option>
                <option value="Nokia">Nokia</option>
                <option value="LG">LG</option>
                <option value="Blackberry">Blackberry</option>
            </select><br><br>
            Sort by:
            Lowest price<input name="priceorder" type="radio" value="asc" <?php if($_POST['priceorder']=="asc") echo "checked";?>/>

            Highest price
            <input name="priceorder" type="radio" value="desc" <?php if($_POST['priceorder']=="desc") echo "checked";?>/><br><br>

            <input type="submit" id="submit" value="Submit"><br><br>

        </form>

        <table border='1px' width='100%'>
        <thead>
            <tr>
                <th>ID</th>
                <th>PRODUCT NAME</th>
                <th>PRICE($)</th>
                <th>CATEGORY</th>
                <th>Image</th>
            </tr>
        </thead>
        <?php
            while($row=mysqli_fetch_assoc($result)){
        ?>   
        <tr>
            <td><?php echo $row['pid'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['price'];?></td>
            <td><?php echo $row['category'];?></td>
            <td><?php if(!empty($row['photo'])):?>
          <img src="images/<?= $row['photo'];?>" width="100">
          <?php endif; ?></td>
        </td>
        </tr>
        <?php
        }
        ?>
        </table>
        

</body>
</html>

