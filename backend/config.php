<?php
$errors = [];
$con = mysqli_connect("localhost", "root", "", "node") or die("Connection failed");

$username = '';
$email = '';
$phone = '';

$output = '';

if(isset($_POST['register'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if(preg_match("/^[a-zA-Z\S]+$/", $username)){
        array_push($errors, " only letter are allowed");
    }
    
    if(empty($username)){array_push($errors, "Email is required");}
    if(empty($email)){array_push($errors, "Email is required");}
    if(empty($phone)){array_push($errors, "Phone is required");}

    if(!preg_match('/^[0-9]*$/',$phone)){
        array_push($errors, " only number are allowed");
    }

    if (count($errors) == 0){
        mysqli_query($con, "INSERT INTO users(username, email, phone) VALUES('$username','$email','$phone')");
    }
}


// We need to display our data come from database

$sql = mysqli_query($con, "SELECT * FROM users");






























    
