
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
            <h2>Leading the way in medical excellenc</h2>
            <p>Earth greater grass for good. Place for divide evening yielding them that. Creeping beginning over
                gathered brought</p>
           @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{route('frontend.suggest')}}"><button class="btn-find-doctor">Find doctor</button></a>
               @else
                <a href="{{route('frontend.login')}}"><button class="btn-find-doctor">Signin</button></a>
               @endif
        </div>
    </div>
    @endsection

