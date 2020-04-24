<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Doctor Care</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Heebo|Pacifico&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="frontend/css/main-css.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="frontend/js/main-js.js"></script>
    <style>
        html, body {
            height: 100%;
        }

        main {
            height: 100%;
            background: url("frontend/images/banner-bg.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .login-page {
            padding-top: 200px;

        }

        .login {
            padding: 30px;
            border-radius: 5px;
            background: rgba(119, 119, 119, 0.2);
            width: 30%;
            margin-left: 35%;
        }
        .register a{
            color: #0a66b7;
        }
        .register a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header>
    <div class="header">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="main-header">
                    <div class="main-logo">
                        <div class="logo">
                            <img src="frontend/images/logo.png">
                        </div>
                        <p class="logo-title">Doctor Care</p>
                    </div>
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="login-page">
        <div class="container">
            <div class="login">
                <h2 class="title text-center">Login</h2>
                @if(session('thongbao'))
                    <div class="alert alert-danger">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form action="{{route('frontend.login.post')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="text-uppercase">Tên đăng nhập: </label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Mật khẩu: </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-secondary text-uppercase">Đăng nhập</button>
                    </div>
                </form>
                <p class="register">Chưa có tài khoản?<a href="{{route('frontend.register')}}"> Đăng ký ngay</a></p>
            </div>
        </div>
    </div>
</main>
</body>
</html>
