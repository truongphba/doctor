
@extends('frontend.layouts.layout')

@section('title','Processing')

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
        <div class="container text-center">
            <h2>Đang trong trong quá trình khám bệnh....  </h2>
            <div>
                <i class="far fa-smile-wink" style="font-size: 80pt;margin-bottom: 20px"></i>
            </div>
            <button class="btn btn-success text-uppercase" style="font-size: 20pt">Nhận đơn thuốc</button>
        </div>
    </div>
@endsection

