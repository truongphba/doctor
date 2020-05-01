@extends('frontend.layouts.layout-doctor')
@section('title','Home')
@section('style')
    <style>
        html, body {
            height: 100%;
        }

        main {
            height: 100%;
        }

        .menu {
            padding-top: 5px;
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
                <a href="{{route('frontend.getExamination')}}"><button class="btn btn-primary mt-2" >Kê đơn thuốc</button></a>
            @endif
        </div>
    </div>
@endsection

