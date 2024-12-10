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
                    <h2>Đặt hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                        <span>Đặt hàng thành công</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4 style="text-align: center;">Cảm ơn bạn đã đặt hàng trên hệ thống của chúng tôi
                <br>Chúng tôi sẽ sớm liên hệ với bạn để chốt đơn hàng!
            </h4>
        </div>
    </div>
</section>
<?php
require_once('footer.php');
?>