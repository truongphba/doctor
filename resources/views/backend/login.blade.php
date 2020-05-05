<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Doctor Care - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('backend/main.87c0748b313a1dda75f5.css')}}" rel="stylesheet"></head>

<body>
<div class="app-container app-theme-white body-tabs-shadow">
    <div class="app-container">
        <div class="h-100">
            <div class="h-100 no-gutters row">
                <div class="d-none d-lg-block col-lg-4">
                    <div class="slider-light">
                        <div class="slick-slider">
                            <div>
                                <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                    <div class="slide-img-bg" style="background-image: url('{{asset('backend/assets/images/banner-login.jpg')}}');"></div>
                                    <div class="slider-content"><h3>Doctor Care</h3>
                                        <p>Quản trị hệ thống dịch vụ tư vấn, khám bệnh trực tuyến Doctor Care</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                    <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                        <div class="app-logo">
                            <img style="width: 100px;height: auto" src="{{asset('backend/assets/images/logo.png')}}">
                        </div>
                        <h4 class="mb-0">
                            <span class="d-block">Chào mừng bạn quay lại,</span>
                            <span>Vui lòng đăng nhập hệ thống.</span></h4>
                        <div class="divider row"></div>
                        <div>
                            <form action="{{route('backend.login.post')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="exampleEmail" class="">Tên người dùng</label><input name="name" id="exampleEmail" placeholder="Nhập địa chỉ Email..." type="text" class="form-control"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative form-group"><label for="examplePassword" class="">Mật khẩu</label><input name="password" id="examplePassword" placeholder="Nhập mật khẩu..." type="password"
                                                                                                                                               class="form-control"></div>
                                    </div>
                                </div>
                                <div class="divider row"></div>
                                <div class="d-flex align-items-center">
                                    <div class="ml-auto">
                                        <button type="submit" class="btn btn-primary btn-lg">Đăng nhập</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('/backend/assets/scripts/main.87c0748b313a1dda75f5.js')}}"></script></body>
</html>
