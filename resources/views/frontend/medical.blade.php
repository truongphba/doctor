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
            <h2>Record</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Record</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="about-page">
        <div class="container">
            <p class="title">Record</p>
            <table class="table .table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Symptom</th>
                    <th>Diagnosis</th>
                    <th>Medicine</th>
                    <th>Amount</th>
                    <th>Using</th>
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
