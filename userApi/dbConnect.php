<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$dbname = "ajax_users";

$connect = mysqli_connect($localhost, $user, $pass, $dbname);
if(!$connect){
    echo "erros";
}