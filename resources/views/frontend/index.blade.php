@extends('frontend.layouts.layout')

@section('title','Home')

@section('style')
    <style>
        .tutorial-bg {
            background: white;
            border: solid 5px white;
            -webkit-box-shadow: 0 0 10px black;
            box-shadow: 0 0 10px black;
        }

        .tutorial-img {
            width: 100%;
            height: 400px;
        }

        .tutorial-img img {
            width: 100%;
            height: 100%;
        }

        .home-page {
            padding-bottom: 30px;
        }

        .tutorial-content {
            text-align: center;
        }

        .tutorial-content p {
            font-weight: bold;
            padding: 10px 0;
        }
    </style>
@endsection

@section('content')
    <div class="home-page">
        <div class="container">
            <h2>Dẫn đầu trong sự xuất sắc của y tế</h2>
            <p>Sức khỏe của bệnh nhân là niềm hạnh phúc của chúng tôi. Tận tâm chăm sóc, nhiệt tình lắng nghe</p>
            @if(session('thongbao'))
                <div class="alert alert-danger">
                    {{session('thongbao')}}
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{route('frontend.suggest')}}">
                    <button class="btn-find-doctor" >Tìm bác sĩ</button>
                </a>
                <div class="stream">
                    <h2 style="padding-top: 100px">Hướng dẫn tìm bác sĩ</h2>
                    <div class="tutorial-bg">
                        <div class="tutorial">
                            <div class="tutorial-content">
                                <div class="tutorial-img"><img src="{{asset('frontend/images/patient-tutorial-1.png')}}">
                                </div>
                                <p>Click button tìm bác sĩ</p>
                            </div>
                            <div class="tutorial-content">
                                <div class="tutorial-img"><img src="{{asset('frontend/images/patient-tutorial-2.png')}}">
                                </div>
                                <p>Click chọn giới tính</p>
                            </div>
                            <div class="tutorial-content">
                                <div class="tutorial-img"><img src="{{asset('frontend/images/patient-tutorial-3.png')}}">
                                </div>
                                <p>Click chọn bộ phận và triệu chứng cần khám và tìm bác sĩ</p>
                            </div>
                            <div class="tutorial-content">
                                <div class="tutorial-img"><img src="{{asset('frontend/images/patient-tutorial-4.png')}}">
                                </div>
                                <p>Đồng ý cuộc gọi để bắt đầu kết nối với bác sĩ</p>
                            </div>
                            <div class="tutorial-content">
                                <div class="tutorial-img"><img src="{{asset('frontend/images/patient-tutorial-5.png')}}">
                                </div>
                                <p>Kết nối với bác sĩ để nhận đơn thuốc</p>
                            </div>
                            <div class="tutorial-content">
                                <div class="tutorial-img"><img
                                        src="{{asset('frontend/images/patient-tutorial-6.png')}}"></div>
                                <p>Nhận đơn thuốc</p>
                            </div>
                            <div class="tutorial-content">
                                <div class="tutorial-img"><img
                                        src="{{asset('frontend/images/patient-tutorial-7.png')}}"></div>
                                <p>Bình chọn sao cho bác sĩ</p>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{route('frontend.login')}}">
                    <button class="btn-find-doctor" style="margin-bottom: 550px">Đăng nhập</button>
                </a>
            @endif


        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.tutorial').slick({
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: true
            });
        });

    </script>
@endsection
