<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng ký tài khoản</title>

    <link href="quantri/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="quantri/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color: #9db677;">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-8  offset-lg-2">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng ký</h1>
                                    </div>
                                    <!--POST method-->
                                    <form class="user" method="post" action="signup.php">

                                        <div class="form-group">
                                            <input type="name" name="name" class="form-control form-control-user"
                                                id="exampleInputName" aria-describedby="emailHelp" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="phone" name="phone" class="form-control form-control-user"
                                                id="exampleInputPhone" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="adress" name="address" class="form-control form-control-user"
                                                id="exampleInputAddress" placeholder="Address">
                                        </div>
                                        <!--hmm-->
                                        <button name="btSubmit" class="btn btn-secondary btn-user btn-block"
                                            style="background-color: #609411;">
                                            Đăng ký
                                        </button>

                                        <a href="login.php" class="btn btn-link">Đã có tài khoản? Đăng nhập</a>
                                        <br>
                                        <a href="index.php" class="btn btn-link">Trở lại trang chủ</a>
                                        <hr>
                                        <!-- <a href="#" onclick="alert('Đang hiện thực ...')"
                                    class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="#" onclick="alert('Đang hiện thực ...')"
                                    class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a> -->
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