<?php
// if ($cart) {
//     if (!isset($_SESSION["user"])) {
//         header("Location: login.php");
//         die();
//     }
// }
require('./db/conn.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Thực phẩm sạch</title>

    <!-- Google Font -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Kanit:wght@600;800&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="custom.css" type="text/css">

    <!-- <link href="quantri/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="quantri/css/sb-admin-2.min.css" rel="stylesheet" />

    <script src="quantri/vendor/jquery/jquery.min.js"></script>
    <script src="quantri/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="quantri/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="quantri/js/sb-admin-2.min.js"></script>

    <script src="quantri/vendor/chart.js/Chart.min.js"></script>

    <script src="quantri/js/demo/chart-area-demo.js"></script>
    <script src="quantri/js/demo/chart-pie-demo.js"></script> -->

</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header">

        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="./index.php">Trang chủ</a></li>
                                <li><a href="./shop.php">Sản phẩm</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2">
                        <div class="header__cart">
                            <ul>
                                <div class="header__top__right__auth">
                                    <li>
                                        <a href="./cart.php">
                                            <i class="fa fa-shopping-bag"></i>
                                            <span>
                                                <?php
                                                $cart = [];
                                                if (isset($_SESSION['cart'])) {
                                                    $cart = $_SESSION['cart'];
                                                }
                                                $count = 0;
                                                $tongtien = 0;
                                                foreach ($cart as $item) {
                                                    $count += $item['qty'];
                                                    $tongtien += $item['qty'] * $item['disscounted_price'];
                                                }
                                                echo $count;
                                                ?>
                                            </span>
                                        </a>
                                    </li>

                                    <!-- Kiểm tra trạng thái đăng nhập -->
                                    <?php if (isset($_SESSION['user'])): ?>
                                        <!-- Người dùng đã đăng nhập -->
                                        <li>
                                            <a href="./vieworders.php">
                                                <i class="fa fa-user-circle"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fa fa-sign-out"></i>
                                            </a>
                                        </li>
                                    <?php else: ?>
                                        <!-- Người dùng chưa đăng nhập -->
                                        <li>
                                            <a href="./login.php">
                                                <i class="fa fa-user"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./signupform.php">
                                                <i class="fa fa-user-plus"></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Chắc chắn đăng xuất?</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="window.location.href='logout.php';">Logout</button>
                                                    <!-- <a class="btn btn-primary" href="logout.php">Logout</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        if ($is_homepage) {
            echo '<section class="hero">';
        } else {
            echo '<section class="hero hero-normal">';
        }
        ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục</span>
                        </div>
                        <ul>
                            <?php
                            $sql_str = "select * from categories order by name";
                            $result = mysqli_query($conn, $sql_str);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <li><a href="#"><?= $row['name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="hero__search__form">
                                <form action="timkiem.php" method="get">
                                    <!--select: dropdown-->
                                    <select name="danhmuc">
                                        <option value='*'>Tất cả danh mục</option>
                                        <?php
                                        require('./db/conn.php');
                                        $sql_str = "select * from categories order by name";
                                        $result = mysqli_query($conn, $sql_str);
                                        // row by row
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <option value=<?= $row['id'] ?>>
                                                <?= $row['name'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <input type="text" name="tukhoa" placeholder="Bạn cần tìm gì?">
                                    <button type="submit" class="site-btn">Tìm</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="header__cart">
                                <div class="header__cart__price">Tổng tiền:
                                    <span><?= number_format($tongtien, 0, '', '.') . " VNĐ" ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="humberger__open">
                        <i class="fa fa-bars"></i>
                    </div>

                    <div class="row">
                        <?php if ($is_homepage) { ?>
                            <div class="col-lg-12">
                                <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                                    <div class="hero__text">
                                        <span>THỰC PHẨM SẠCH</span>
                                        <h2>100% <br />TỪ THIÊN NHIÊN</h2>
                                        <p>Luôn sẵn hàng, ship mọi lúc mọi nơi</p>
                                        <a href="shop.php" class="primary-btn">MUA NGAY</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
    </header>