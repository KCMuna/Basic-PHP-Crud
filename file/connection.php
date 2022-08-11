<?php
$connection= new mysqli('localhost','root','','database') or exit("Unable to connect");

if(!$connection)
{
    echo ("Failed".mysqli_connect_error());
}
echo "success";

?>