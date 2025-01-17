<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

if (Auth::check()) {
    $user = DB::table('users')->select('*')->where('users.id', '=', Auth::id())->first();
    $doctor = DB::table('doctors')
        ->join('users', 'doctors.id', '=', 'users.doctor_id')
        ->select('doctors.*', 'users.doctor_id as doctor_id')
        ->where('users.id', '=', Auth::id())
        ->first();
    $patient = DB::table('patients')
        ->join('users', 'patients.id', '=', 'users.patient_id')
        ->select('patients.*', 'users.patient_id as patient_id')
        ->where('users.id', '=', Auth::id())
        ->first();
    if (!is_null($user->doctor_id)) {
        $avatar = $doctor->images;
        $name = $doctor->name;
    } else if (!is_null($user->patient_id)) {
        $avatar = $patient->images;
        $name = $patient->name;
    }
}
?>
<div class="app-header header-shadow">
    <div class="app-header__logo">
        <a href="{{route('admin')}}">
            <div class="logo-src">
                <img style="width: 50px;height: auto" src="/backend/assets/images/logo.png">
            </div>
        </a>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div>
            <ul class="header-megamenu nav">
                <li class="nav-item">
                    <div class="rm-max-width">
                        <div class="d-none popover-custom-content">
                            <div class="dropdown-mega-menu">
                                <div class="grid-menu grid-menu-3col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-6 col-xl-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="app-header-right">


            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                   class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="{{asset($avatar)}}" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                     class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-2"
                                                 style="background-image: url('/backend/assets/images/dropdown-header/city3.jpg');"></div>
                                            <div class="menu-header-content text-left">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <img width="42" class="rounded-circle"
                                                                 src="{{asset($avatar)}}"
                                                                 alt="">
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">{{$name}}
                                                            </div>
                                                            <div class="widget-subheading opacity-8">Quản trị viên
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right mr-2">
                                                            <form action="{{route('backend.logout')}}">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn-pill btn-shadow btn-shine btn btn-focus">
                                                                    Logouts
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-area-xs" style="height: 150px;">
                                        <div class="scrollbar-container ps">
                                            <ul class="nav flex-column">
                                                <li class="nav-item-header nav-item">Hoạt động
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Trò chuyện
                                                        <div class="ml-auto badge badge-pill badge-info">8
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Thay đổi mật khẩu
                                                    </a>
                                                </li>
                                                <li class="nav-item-header nav-item">Tài khoản của tôi
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Cài đặt
                                                        <div class="ml-auto badge badge-success">Mới
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Tin nhắn
                                                        <div class="ml-auto badge badge-warning">512
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Nhật ký
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider mb-0 nav-item"></li>
                                    </ul>
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <button
                                                    class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                    <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                    Message Inbox
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button
                                                    class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                    <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                    <b>Support Tickets</b>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item">
                                        </li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-wide btn btn-primary btn-sm">
                                                Xem tin nhắn
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{$name}}
                            </div>
                            <div class="widget-subheading">
                                Quản trị viên
                            </div>
                        </div>
                        <div class="widget-content-right header-user-info ml-3">
                            <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
