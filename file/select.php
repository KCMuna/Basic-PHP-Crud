<?php

include 'connection.php';
//produce a query to select all
//then
//Use where to narrow search
$query="SELECT * from users where userPass='passwd'";

//run query and save result
$result=mysqli_query($connection, $query);

//loop through array and store each row
//echo out each record
while($row=mysqli_fetch_assoc($result)){
    echo $row['userID'].' '.$row['userName'].' '.$row['userPass'].'<br />';
}

?>