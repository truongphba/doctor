@extends('frontend.layouts.layout-doctor')
@section('title','Examination')
@section('style')
    <style>
        .menu {
            padding-top: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="page">
        <div class="container text-center">
            <div class="medical-record">
                <h2>Kê đơn thuốc mới</h2>
                <form method="post" action="{{route('records.store')}}">
                    @csrf
                    <input type="hidden" name="doctor_id" value="{{$doctor->doctor_id}}">
                    <input type="hidden" name="patient_id" value="{{$patient->patient_id}}">
                    <div class="records">
                        <div class="row">
                            <div class="col-lg-2">
                                <p>Triệu chứng</p>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="symptom"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="records">
                        <div class="row">
                            <div class="col-lg-2">
                                <p>Chuẩn đoán</p>
                            </div>
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <textarea class="form-control" name="diagnosis"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="records">
                        <div class="row">
                            <div class="col-lg-2">
                                <p>Đơn thuốc</p>
                            </div>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Tên thuốc</label>
                                            <input type="text" name="medicine" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Liều</label>
                                            <input type="text" name="amount" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cách dùng</label>
                                            <input type="text" name="using" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="money-come" role="dialog" aria-labelledby="exampleModalCenterTitle"
                         aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="examination-content">
                                    <p>Tài khoản của bạn đã được cộng thêm 2$</p>
                                    <button type="submit" class="btn btn-success btn-examnination">Đồng ý</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#money-come"
                        aria-hidden="true" data-backdrop="static" data-keyboard="false">Kê đơn
                </button>
            </div>
            <div class="patient-info">
                <h2>Thông tin bệnh nhân</h2>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="patient-img">
                            <img src="{{asset($patient->images)}}">
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <table class="table table-infor">
                            <tr>
                                <td>Họ tên</td>
                                <td>{{$patient->name}}</td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>{{$patient->address}}</td>
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td>{{$patient->gender}}</td>
                            </tr>
                            <tr>
                                <td>Ngày sinh</td>
                                <td>{{$patient->birth}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="old-medical">
                <h2>Đơn thuốc cũ</h2>
                <table class="table .table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Triệu chứng</th>
                        <th>Chuẩn đoán</th>
                        <th>Tên thuốc</th>
                        <th>Liều</th>
                        <th>Cách dùng</th>
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
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
