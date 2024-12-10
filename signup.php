<?php
//bảng users -> name, email, password, phone, address, status - Avtive, created_at, update_at NOW()
require('db/conn.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sql_str = "INSERT INTO `users` (`name`, `email`, `password`, `phone`, `address`, 
 `status`, `created_at`, `updated_at`) VALUES 
    ('$name', 
    '$email',
    '$password', 
    '$phone',
    '$address', 
    'Active',  NOW(), NOW());";
mysqli_query($conn, $sql_str);
header("location: login.php");

?>