<?php

use App\Doctor;
use App\Patient;


$doctors_count = Doctor::get()->count();
$patients_count = Patient::get()->count();

?>
<div class="header">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-12">
            <div class="main-header">
                <a href="{{route('frontend.index')}}">
                    <div class="main-logo">
                        <div class="logo">
                            <img src="/frontend/images/logo.png">
                        </div>
                        <p class="logo-title">Doctor Care</p>
                    </div>
                </a>
                <i class="fas fa-bars"></i>
            </div>
        </div>

        @if(\Illuminate\Support\Facades\Auth::check())
            <div class="col-lg-9 col-md-9 col-12">
                <ul class="menu float-right">
                    <a href="about.html">
                        <li>Giới thiệu</li>
                    </a>
                    <a href="index.php">
                        <li>Đặt lịch hẹn</li>
                    </a>
                    <li>
                        <div class="account">
                            <div class="dis-flex">
                                <div class="ava">
                                    @if($patient->images == null)
                                        <i class="fas fa-user"></i>
                                    @else
                                        <img src="{{asset($patient->images)}}">
                                    @endif
                                </div>
                                <p class="account-name">{{$patient->name}}
                                    <i class="fas fa-chevron-down"></i></p>
                                <div class="dropdown-menu">
                                    <ul class="sub-account">
                                        <li><p>Số dư: <span>
                                                    {{$patient->wallet}}
                                           $</span></p></li>
                                        <a href="{{route('frontend.medical')}}">
                                            <li>Đơn thuốc cũ</li>
                                        </a>
                                        <a href="{{route('frontend.recharge')}}">
                                            <li>Nạp tiền</li>
                                        </a>
                                        <a href="{{route('frontend.logout')}}">
                                            <li>Đăng xuất</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-danger">Sos</button>
                    </li>
                </ul>
            </div>
        @else
        @endif
    </div>
</div>
@if(\Illuminate\Support\Facades\Auth::check())
    <div class="user-numbers">
        <p><i class="fas fa-user-nurse"></i> Bác sĩ: <span>{{$doctors_count}}</span></p>
        <p><i class="fas fa-user"></i> Bệnh nhân: <span>{{$patients_count}}</span></p>
    </div>
@endif
