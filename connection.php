<?php

$username = "root";
$password = " ";
$server ='localhost';
$database = 'loginteachus';

$con = mysqli_connect($server,$username,$password,$database);

if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}
?>