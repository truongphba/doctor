@extends('frontend.layouts.layout')
@section('title','Records')
@section('style')
    <style>
        .copy-right {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div class="top-content">
        <div class="container">
            <h2>Đơn thuốc</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('frontend.index')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Đơn thuốc</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="about-page">
        <div class="container">
            <p class="title">Đơn thuốc</p>
            <table class="table .table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Triệu chứng</th>
                    <th>Chuẩn đoán</th>
                    <th>Thuốc</th>
                    <th>Liều</th>
                    <th>Sử dụng</th>
                    <th>Ngày khám</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as $record)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$record->symptom}}</td>
                        <td>{{$record->diagnosis}}</td>
                        <td>{{$record->medicine}}</td>
                        <td>{{$record->amount}}</td>
                        <td>{{$record->using}}</td>
                        <td>{{$record->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
