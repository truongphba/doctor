
@if(!is_null($user->doctor_id))
    @extends('frontend.layouts.layout-doctor')
@elseif(!is_null($user->patient_id))
    @extends('frontend.layouts.layout')
@endif
@section('title','About')

@section('content')
    <div class="top-content">
        <div class="container">
            <h2>Về chúng tôi</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Về chúng tôi</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="about-page">
        <div class="container">
            <div class="clinic">
                <div class="row">
                    <div class="col-lg-5 col-12 ">
                        <div class="about-img">
                            <img src="{{asset('/frontend/images/welcome.png')}}">
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="main-clinic">
                            <h2>Welcome to our clinic</h2>
                            <p>Subdue whales void god which living don't midst lesser yielding over lights whose. Cattle
                                greater brought sixth fly den dry good tree isn't seed stars were.</p>
                            <p class="mg-t10">Subdue whales void god which living don't midst lesser yielding over
                                lights whose. Cattle
                                greater brought sixth fly den dry good tree isn't seed stars were the boring.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-content">
                <div class="container text-center">
                    <h2 class="title">Patient are saying</h2>
                    <p class="sub-title">Green above he cattle god saw day multiply under fill in the cattle fowl a all,
                        living, tree word
                        link available in the service for subdue fruit.</p>
                    <div class="main-bottom-content">
                        <div class="row">
                            <div class="col-lg-5 col-12">
                                <div class="people-say">
                                    <div class="people-img">
                                        <img src="{{asset('frontend/images/patient1.png')}}">
                                    </div>
                                    <h4>DAREN JHONSON</h4>
                                    <p>Hp Specialist</p>
                                    <p>Elementum libero hac leo integer.<br>
                                        Risus hac road parturient feugiat.<br>
                                        Litora cursus hendrerit bib elit Tempus inceptos posuere metus.</p>
                                </div>
                                <div class="people-say">
                                    <div class="people-img">
                                        <img src="{{asset('frontend/images/patient2.png')}}">
                                    </div>
                                </div>
                                <h4>BLACK HEIDEN</h4>
                                <p>Hp Specialist</p>
                                <p>Elementum libero hac leo integer.<br>
                                    Risus hac road parturient feugiat.<br>
                                    Litora cursus hendrerit bib elit Tempus inceptos posuere metus.</p>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 col-12">
                            <div class="appointment">
                                <h4>APPOINTMENT NOW</h4>
                                <form method="post">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Your Name:">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Your Email:">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Date:">
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Message:" class="form-control"></textarea>
                                    </div>
                                    <button class="btn-appointment">APPOINTMENT NOW</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
