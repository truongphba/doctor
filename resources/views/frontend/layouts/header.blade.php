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
                            <li>About</li>
                        </a>
                        <a href="index.php">
                            <li>Take Appointment</li>
                        </a>
                        <li>
                            <div class="account">
                                <div class="dis-flex">
                                    <div class="ava">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <p>{{$patient->name}}
                                        <i class="fas fa-chevron-down"></i></p>
                                    <div class="dropdown-menu">
                                        <ul class="sub-account">
                                            <li><p>Balance: <span>
                                                    {{$patient->wallet}}
                                           $</span></p></li>
                                            <a href="medical.html">
                                                <li>Medical record</li>
                                            </a>
                                            <a href="recharge.html">
                                                <li>Recharge</li>
                                            </a>
                                            <a href="{{route('frontend.logout')}}">
                                                <li>Sign out</li>
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
