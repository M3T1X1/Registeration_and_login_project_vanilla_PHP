<?php

$db_hostname = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "cooking_book";

$connect = mysqli_connect($db_hostname,$db_user,$db_password,$db_name);     

if(isset($connect))
{
    echo "You are connected";
}
else 
{                                                         
    echo "Something went wrong with database connection"; 
}


?>