<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
require_once 'dbConnect.php';
require_once 'toolBox.php'; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];

    $sql = "INSERT INTO users (f_name, l_name, email) VALUES ('$fname','$lname','$email')";
    $result = mysqli_query($connect, $sql);

    if($result){
        response(200, "user has been created");
    }else {
        response(400, "Error");
    }

    mysqli_close($connect);
}