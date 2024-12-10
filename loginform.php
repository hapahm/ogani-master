<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng nhập vào hệ thống</title>

    <link href="quantri/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="quantri/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color: #9db677;">
    <div class="container" style="color: green">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-8  offset-lg-2">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Thông tin Đăng nhập</h1>

                                    </div>
                                    <!--POST method-->
                                    <form class="user" method="post">

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Password">
                                        </div>
                                        <!--hmm-->
                                        <button name="btSubmit" class="btn btn-secondary btn-user btn-block"
                                            style="background-color: #609411;">
                                            Đăng nhập
                                        </button>
                                        <a href="signupform.php" class="btn btn-link">Chưa có tài khoản? Đăng ký</a>
                                        <br>
                                        <a href="index.php" class="btn btn-link">Trở lại trang chủ</a>
                                        <?php echo "<h4 class='alert alert-light'>$errorMsg</h4>" ?>
                                        <hr>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="quantri/vendor/jquery/jquery.min.js"></script>
    <script src="quantri/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="quantri/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="quantri/js/sb-admin-2.min.js"></script>

</body>

</html>