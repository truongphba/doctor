<div class="header">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-12">
            <div class="main-header">
                <a href="{{route('frontend.index')}}">
                    <div class="main-logo">
                        <div class="logo">
                            <img src="frontend/images/logo.png">
                        </div>
                        <p class="logo-title">Doctor Care</p>
                    </div>
                </a>
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-12">
            <ul class="menu float-right">
                <a href="about.html">
                    <li>About</li>
                </a>
                <a href="work-list.html">
                    <li>Work list</li>
                </a>
                <li>
                    <div class="account">
                        <div class="dis-flex">
                            <div class="ava">
                                <i class="fas fa-user"></i>
                            </div>
                            <p>
                                @if(isset($doctor))
                                    {{$doctor->name}}
                                @endif
                                <i class="fas fa-chevron-down"></i></p>
                            <div class="dropdown-menu">
                                <ul class="sub-account">
                                    <li><p>Balance: <span>
                                                @if(isset($doctor))
                                                    {{$doctor->wallet}}
                                                @endif
                                                    $
                                                </span></p></li>
                                    <a href="#"><li data-toggle="modal" data-target="#add-schedule">Add schedule</li></a>
                                    <a href="{{route('frontend.logout')}}">
                                        <li>Sign out</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="modal fade" id="add-schedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
