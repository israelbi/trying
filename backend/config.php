<?php

$con = mysqli_connect("localhost", "root", "", "node") or die("Connection failed");

$username = '';
$email = '';
$phone = '';

$output = '';

if(isset($_POST['register'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    mysqli_query($con, "INSERT INTO users(username, email, phone) VALUES('$username','$email','$phone')");
}

// We need to display our data come from database

$sql = mysqli_query($con, "SELECT * FROM users");

// Update
if(isset($_POST['update'])){





























    
}