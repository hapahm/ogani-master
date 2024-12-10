<?php
require('db/conn.php');
$name = $_POST['name'];
$email = $_POST['email'];

$sql_str = "INSERT INTO `users` (`name`, `email`, `status`, `created_at`) VALUES
('$name', '$email', 'Active', NOW());
";

mysqli_query($conn, $sql_str);
header("Location: signupform.php");
?>