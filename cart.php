<?php
session_start();
$is_homepage = false;
require_once('./db/conn.php');
require_once('header.php');
?>
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Giỏ hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Giỏ hàng</h4>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="checkout__order">
                        <h4>Đơn hàng của bạn</h4>
                        <div class="checkout__order__products">
                            Sản phẩm
                        </div>
                        <table class="table">
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>
                            <?php
                            $cart = [];
                            if (isset($_SESSION['cart'])) {
                                $cart = $_SESSION['cart'];
                            }
                            $count = 0;
                            $total = 0;
                            foreach ($cart as $item) {
                                $total += $item['qty'] * $item['disscounted_price'];
                                ?>

                                <form action="updatecart.php?id=<?= $item['id'] ?>" method="post">

                                    <tr>
                                        <td><?= ++$count ?></td>
                                        <td><?= $item['name'] ?></td>
                                        <td>
                                            <?= number_format($item['disscounted_price'], 0, '', '.') . " VNĐ" ?>
                                        </td>
                                        <td><input type="number" name="qty" value="<?= $item['qty'] ?>" min="1" /></td>
                                        <td>
                                            <?= number_format($item['disscounted_price'] * $item['qty'], 0, '', '.') . " VNĐ" ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-warning">Cập nhật</button>
                                        </td>
                                        <td>

                                            <a href='./deletecart.php?id=<?= $item['id'] ?>' class="btn btn-danger">Xóa</a>
                                        </td>


                                    </tr>
                                </form>

                                <?php
                            }
                            ?>


                        </table>
                        <div class="checkout__order__total">
                            Tổng tiền: <span>
                                <?= number_format($total, 0, '', '.') . " VNĐ" ?>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="shop.php" class="btn btn-primary">Tiếp tục mua sắm</a>
                            <a href="thanhtoan.php" class="btn btn-success">
                                Thanh toán
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

require_once('footer.php');
?>