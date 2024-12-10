<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-kiss-wink-heart"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Masterr<sup>yum:D</sup></div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang chủ</span></a>
    </li>
    <hr class="sidebar-divider">


    <div class="sidebar-heading">Chức năng chính</div>

    <!-- Nav - Thương hiệu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
            aria-controls="collapseOne">
            <i class="fas fa-calendar-day"></i>
            <!--icon, Font Awesome Free 5.15.3 by @fontawesome - https://fontawesome.com-->

            <span>Thương hiệu - Brand</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Các chức năng:</h6>
                <a class="collapse-item" href="./listbrands.php">List brands</a>
                <a class="collapse-item" href="./themthuonghieu.php">Thêm thương hiệu</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-calendar-day"></i>

            <span>Danh mục sản phẩm</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Các chức năng:</h6>
                <a class="collapse-item" href="./listcats.php">Listcats</a>
                <a class="collapse-item" href="./themdanhmuc.php">Thêm danh mục sp</a>
            </div>
        </div>
    </li>

    <!-- Nav - Sản phẩm -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fab fa-product-hunt"></i>
            <span>Sản phẩm</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Các chức năng:</h6>
                <a class="collapse-item" href="./listsanpham.php">Danh sách sản phẩm</a>
                <a class="collapse-item" href="./themsanpham.php">Thêm sản phẩm</a>
            </div>
        </div>
    </li>

    <!-- Nav - Danh mục Tin tức -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDMTT" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fab fa-product-hunt"></i>
            <span>Danh mục tin tức - NewsCats</span>
        </a>
        <div id="collapseDMTT" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Các chức năng:</h6>
                <a class="collapse-item" href="./listnewscats.php">Danh sách tin tức</a>
                <a class="collapse-item" href="./themdanhmuctintuc.php">Thêm danh mục tin tức</a>
            </div>
        </div>
    </li>

    <!-- Nav - Tin tức -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTT" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fab fa-product-hunt"></i>
            <span>Tin tức - News</span>
        </a>
        <div id="collapseTT" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Các chức năng:</h6>
                <a class="collapse-item" href="./listnews.php">Danh sách tin tức</a>
                <a class="collapse-item" href="./themtintuc.php">Thêm tin tức</a>
            </div>
        </div>
    </li>

    <!-- Nav - Đơn hàng -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-wallet"></i>
            <span>Đơn hàng</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Các chức năng:</h6>
                <a class="collapse-item" href="./listorders.php">Danh sách đơn hàng</a>
                <a class="collapse-item" href="">.</a>
            </div>
        </div>
    </li> -->

    <!-- Nav - Người dùng -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-users"></i>
            <span>Người dùng</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Các chức năng:</h6>
                <a class="collapse-item" href="./listusers.php">Danh sách người dùng</a>
                <a class="collapse-item" href="./themuser.php">Thêm người dùng</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        PHẦN BỔ SUNG
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>.</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">.</h6>
                <a class="collapse-item" href="">.</a>
                <a class="collapse-item" href="">.</a>
                <a class="collapse-item" href="">.</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">.</h6>
                <a class="collapse-item" href="">.</a>
                <a class="collapse-item" href="">.</a>
            </div>
        </div>
    </li> -->

    <!-- Nav Item - Charts -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>.</span></a>
    </li> -->

    <!-- Nav Item - Tables -->
    <!-- <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>.</span></a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->