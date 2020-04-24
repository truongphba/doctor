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

        main {
            background: url("frontend/images/banner-bg.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .login-page {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .login {
            padding: 30px;
            border-radius: 5px;
            background: rgba(119, 119, 119, 0.2);
            width: 40%;
            margin-left: 30%;
        }
        .register a{
            color: #0a66b7;
        }
        .register a:hover{
            text-decoration: underline;
        }
        .skype-register{
            margin-top: 5px;
        }
        .skype-register a{
            color: #0a66b7;
        }
        .skype-register a:hover{
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
                <h2 class="title text-center">Đăng kí</h2>
                <div class="btn-group" style="width: 100%;margin-bottom: 20px" role="group" aria-label="Basic example">
                    <button type="button" style="width: 50%" class="btn btn-success text-uppercase btn-patient">Bệnh nhân</button>
                    <button type="button" style="width: 50%" class="btn btn-danger text-uppercase btn-doctor">Bác sĩ</button>
                </div>
                <form role="form" class="form-patient" action="{{route('frontend.register.post_p')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="text-uppercase">Tên đăng nhập: </label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Mật khẩu: </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Họ và tên: </label>
                        <input type="text" name="p_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Email: </label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Địa chỉ: </label>
                        <input type="text" name="address" class="form-control">
                    </div>
                        <label class="text-uppercase">Giới tính: </label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Nam">
                            <label class="form-check-label" for="exampleRadios1">
                                Nam
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Nữ">
                            <label class="form-check-label" for="exampleRadios2">
                                Nữ
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Ngày sinh: </label>
                        <input type="date" name="birth" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Tên Skype: </label>
                        <input type="text" name="skype" class="form-control">
                        <p class="skype-register">(Đăng nhập hoặc hoặc đăng ký tài khoản Skype để lấy tên Skype! <a href="https://web.skype.com/">Truy cập ngay Skype?</a>)</p>
                    </div>
                    <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="images">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <input type="hidden" name="wallet" value="0">
                    <div class="form-group text-center">
                        <button class="btn btn-secondary text-uppercase">Đăng ký</button>
                    </div>
                </form>
                <form class="form-doctor" style="display: none" action="{{route('frontend.register.post')}}" method="post" >
                    @csrf
                    <div class="form-group">
                        <label class="text-uppercase">Tên đăng nhập: </label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Họ và tên: </label>
                        <input type="text" name="d_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Email: </label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Chuyên khoa: </label>
                        <input type="text" name="specialist" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Skype Name: </label>
                        <input type="text" name="skype" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase">Mật khẩu: </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input type="hidden" name="votes" value="5">
                    <input type="hidden" name="wallet" value="0">
                    <div class="form-group text-center">
                        <button class="btn btn-secondary text-uppercase">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function(){
        $('.btn-patient').click(function(){
            $('.form-patient').show();
            $('.form-doctor').hide();
        });
        $('.btn-doctor').click(function(){
            $('.form-patient').hide();
            $('.form-doctor').show();
        });
        $('#customFile').change(function() {
            var filename = $('#customFile').val();
            $('.custom-file-label').html(filename);
        });
    });
</script>
</body>
</html>
