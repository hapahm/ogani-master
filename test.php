<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    require('db/conn.php');
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    } else {
        echo "Kết nối thành công!";
    }
    ?>

</body>

</html>