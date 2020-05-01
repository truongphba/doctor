
@extends('frontend.layouts.layout')

@section('title','Home')

@section('style')
    <style>
        html, body {
            height: 100%;
        }
        main{
            height: 100%;
        }
    </style>
    @endsection

@section('content')
    <div class="home-page">
        <div class="container">
            <h2>Dẫn đầu trong sự xuất sắc của y tế</h2>
            <p>Sức khỏe của bệnh nhân là niềm hạnh phúc của chúng tôi. Tận tâm chăm sóc, nhiệt tình lắng nghe</p>
           @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{route('frontend.suggest')}}"><button class="btn-find-doctor">Tìm bác sĩ</button></a>
               @else
                <a href="{{route('frontend.login')}}"><button class="btn-find-doctor">Đăng nhập</button></a>
               @endif
        </div>
    </div>
    @endsection

