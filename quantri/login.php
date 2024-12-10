<?php
session_start();
$errorMsg = "";
if (isset($_POST["btSubmit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once("../db/conn.php");
    $sql = "select * from admins where email='$email' and password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row;
        header("Location: index.php");
    } else {
        $errorMsg = "Không tìm thấy thông tin tài khoản trong hệ thống";
        require_once("includes/loginform.php");
    }
} else {
    require_once("includes/loginform.php");
}
?>