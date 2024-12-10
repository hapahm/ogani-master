<?php
session_start();
$delid = $_GET['id'];
require('../db/conn.php');
if ($_SESSION['user']['type'] != 'Admin') {
    echo "<h2>Bạn không có quyền truy cập nội dung này!</h2>";
} else {
    $sql_str = "delete from admins where id=$delid";
    mysqli_query($conn, $sql_str);
    header("location: listusers.php");
}