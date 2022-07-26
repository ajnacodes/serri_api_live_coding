<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
require_once 'dbConnect.php';
require_once 'toolBox.php'; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_GET["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];

    $sql = "UPDATE users SET f_name = '$fname', l_name='$lname', email ='$email' WHERE user_id = {$id}";

    $result = mysqli_query($connect, $sql);

    if($result){
        response(200, "user has been updated");
    }else {
        response(400, "Error");
    }

    mysqli_close($connect);
}