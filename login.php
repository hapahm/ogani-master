<?php
session_start();
$errorMsg = "";

if (isset($_POST["btSubmit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once("db/conn.php");

    $sql = "select * from users where email='$email' and password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row;
        header("Location: index.php");

    } else {
        $errorMsg = "Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng thử lại!";
        require_once("loginform.php");
    }
} else {
    require_once("loginform.php");
}
?>