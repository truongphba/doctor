
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
            <button class="btn btn-success text-uppercase" style="font-size: 20pt"  data-backdrop="static"
                    data-keyboard="false" data-toggle="modal" data-target="#show-record">Nhận đơn thuốc</button>
        </div>
    </div>
    <div class="modal fade" id="show-record" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="show-record text-center">
                    <h2>Medical record</h2>
                    @if($examination == null)
                        <p>Bác sĩ đang kê đơn thuốc vui lòng thử lại</p>
                        <a href="{{route('frontend.processing')}}"><button class="btn btn-primary">Thử lại</button></a>
                    @endif
                    @if($examination != null)
                        <table class="table .table-striped text-left">
                            <thead>
                            <tr>
                                <th>Triệu chứng</th>
                                <th>chuẩn đoán</th>
                                <th>Thuống</th>
                                <th>Liều</th>
                                <th>Sử dụng</th>
                                <th>Ngày khám</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$record->symptom}}</td>
                                <td>{{$record->diagnosis}}</td>
                                <td>{{$record->medicine}}</td>
                                <td>{{$record->amount}}</td>
                                <td>{{$record->using}}</td>
                                <td>{{$record->created_at}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <h3>Đánh giá bác sĩ</h3>
                        <section class='rating-widget'>

                            <!-- Rating Stars Box -->
                            <div class='rating-stars text-center'>
                                <ul id='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                        <i class='fa fa-star fa-fw'></i>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <a href="{{route("frontend.index")}}">
                            <button class="btn btn-primary btn-close">Đóng</button>
                        </a>
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('/frontend/js/rating.js')}}"></script>
@endsection
