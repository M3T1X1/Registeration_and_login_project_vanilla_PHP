<?php

$db_hostname = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "cooking_book";

$connect = mysqli_connect($db_hostname,$db_user,$db_password,$db_name);     

if(!$connect)
{
    die("Something is wrong with the db connection:  ". mysqli_connect_error());
}
/*
else
{
    echo "Connected to db";
}
*/

?>