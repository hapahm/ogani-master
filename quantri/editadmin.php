<?php
$id = $_GET['id'];

require('../db/conn.php');

$sql_str = "select * from admins where id=$id";

$res = mysqli_query($conn, $sql_str);

$admin = mysqli_fetch_assoc($res);

if (isset($_POST['btnUpdate'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $type = $_POST['type'];


    $sql_str2 = "update admins set name='$name', 
    email='$email',phone='$phone',password='$password',
    address='$address',type='$type' where id=$id";
    mysqli_query($conn, $sql_str2);

    header("location: ./listusers.php");
} else {
    require('includes/header.php');
    if ($_SESSION['user']['type'] != 'Admin') {
        echo "<h2>Bạn không có quyền truy cập nội dung này!</h2>";
    } else {
        ?>


        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Cập nhật người quản trị</h1>
                                </div>
                                <form class="user" method="post" action="#">

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="name" name="name"
                                            aria-describedby="emailHelp" placeholder="Tên người dùng (quản trị)"
                                            value="<?= $admin['name'] ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" value="<?= $admin['email'] ?>"
                                            id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            value="<?= $admin['password'] ?>" id="password" name="password"
                                            aria-describedby="emailHelp" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" value="<?= $admin['phone'] ?>"
                                            id="phone" name="phone" aria-describedby="emailHelp" placeholder="Số điện thoại">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            value="<?= $admin['address'] ?>" id="address" name="address"
                                            aria-describedby="emailHelp" placeholder="Địa chỉ">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Quyền:</label>
                                        <select class="form-control" name="type">
                                            <option>Chọn quyền:</option>
                                            <option value="Admin" <?php if ($admin['type'] == 'Admin')
                                                echo "selected"; ?>>Quản
                                                trị</option>
                                            <option value="Staff" <?php if ($admin['type'] == 'Staff')
                                                echo "selected"; ?>>Nhân
                                                viên</option>


                                        </select>
                                    </div>

                                    <button class="btn btn-primary" name="btnUpdate">Cập nhật</button>
                                </form>
                                <hr>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <?php
    }
    require('includes/footer.php');
}
?>