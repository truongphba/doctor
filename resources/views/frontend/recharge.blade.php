@extends('frontend.layouts.layout')
@section('title','Recharge')
@section('style')

@endsection
@section('content')
    <div class="top-content">
        <div class="container">
            <h2>Recharge</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Recharge</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="about-page">
        <div class="container">
            <h2 class="title text-center">Recharge Card</h2>
            <div class="recharge">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="recharge-items">
                            <button class="btn btn-outline-primary btn-recharge" value="10">10.0$</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="recharge-items">
                            <button class="btn btn-outline-primary btn-recharge" value="20">20.0$</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="recharge-items">
                            <button class="btn btn-outline-primary btn-recharge" value="50">50.0$</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="recharge-items">
                            <button class="btn btn-outline-primary btn-recharge" value="100">100.0$</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="recharge-items">
                            <button class="btn btn-outline-primary btn-recharge" value="200">200.0$</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="recharge-items">
                            <button class="btn btn-outline-primary btn-recharge" value="500">500.0$</button>
                        </div>
                    </div>
                </div>
                <div class="pay">
                    <form method="post" action="{{route('frontend.pRecharge')}}">
                        @csrf
                        <input type="hidden" name="wallet" value="">
                        <button type="submit" class="btn btn-secondary">Nạp</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.recharge-items .btn').click(function () {
            $(this).css('background', '#007bff');
            $(this).css('color', 'white');
            $('.recharge-items .btn').not(this).css('background', 'white');
            $('.recharge-items .btn').not(this).css('color', '#007bff');
            $('.pay input[name=wallet]').val($(this).val());
            console.log( $('.pay input[name=wallet]').val());
        })
    </script>
@endsection
