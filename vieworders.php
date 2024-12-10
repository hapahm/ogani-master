<?php
session_start();

// $is_cart = true;
$is_homepage = false;

$cart = [];
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}





require_once('header.php');
?>
<style>
    .Processing,
    .Confirmed,
    .Shipping,
    .Delivered,
    .Cancelled {
        display: block;

    }

    .Processing {
        background-color: orange;
    }

    .Confirmed {
        background-color: yellowgreen;
    }

    .Shipping {
        background-color: lightblue;
    }

    .Delivered {
        background-color: green;
    }

    .Cancelled {
        background-color: red;
    }
</style>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Đơn hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Home</a>
                        <span>Đơn hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã vận đơn</th>
                                <th>Ngày đặt</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once('./db/conn.php');
                            $sql_str = "select * from orders order by created_at";
                            $result = mysqli_query($conn, $sql_str);
                            $stt = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $stt++;
                                ?>


                                <tr>
                                    <td><?= $stt ?></td>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['created_at'] ?></td>
                                    <td><span class='<?= $row['status'] ?>'>
                                            <?= $row['status'] ?>
                                        </span></td>



                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>

<?php

require_once('footer.php');
?>