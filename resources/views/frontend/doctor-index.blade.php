@extends('frontend.layouts.layout-doctor')
@section('title','Home')
@section('style')
    <style>
        .menu {
            padding-top: 5px;
        }
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
            <?php
            $doctor = DB::table('doctors')
                ->join('users', 'doctors.id', '=', 'users.doctor_id')
                ->select('doctors.*', 'users.doctor_id as doctor_id')
                ->where('users.id', '=', Auth::id())
                ->first();
            $examinations = \App\Examination::where('doctor_id', $doctor->id)->get();
            ?>
            @if($examinations->count() < 1)
                <form method="post" action="{{route('examinations.store')}}">
                    @csrf
                    <input type="hidden" name="doctor_id" value="{{$doctor->id}}">
                    <button type="submit" class="btn-find-doctor stat-work">Bắt đầu làm việc</button>
                </form>
            @else
                <form method="post" action="{{route('examinations.destroyDoctor')}}">
                    @method('DELETE')
                    @csrf
                    <button class="btn-find-doctor stop-work">Kết thúc làm việc
                    </button>
                </form>
                <a href="{{route('frontend.getExamination')}}">
                    <button class="btn btn-primary mt-2">Kê đơn thuốc</button>
                </a>
            @endif
            <div class="stream">
                <h2 style="padding-top: 100px">Hướng dẫn khám bệnh</h2>
                <div class="tutorial-bg">
                    <div class="tutorial">
                        <div class="tutorial-content">
                            <div class="tutorial-img"><img src="{{asset('frontend/images/doctor-tutorial-3.png')}}">
                            </div>
                            <p>Bắt đầu ca làm việc</p>
                        </div>
                        <div class="tutorial-content">
                            <div class="tutorial-img"><img src="{{asset('frontend/images/doctor-tutorial-2.png')}}">
                            </div>
                            <p>Click chọn kê đơn thuốc cho bệnh nhân</p>
                        </div>
                        <div class="tutorial-content">
                            <div class="tutorial-img"><img src="{{asset('frontend/images/doctor-tutorial-1.png')}}">
                            </div>
                            <p>Gửi đơn thuốc cho bệnh nhân</p>
                        </div>
                    </div>
                </div>
            </div>
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
