<?php
$host_name="localhost";
$user_name="root";
$password="";
$db_server="collage_info";

$connect=mysqli_connect($host_name,$user_name,$password,$db_server);

if($connect->connect_error){
    die('Connection is Failed:'.$connect->connect_error);
}

$connect->clone

?>