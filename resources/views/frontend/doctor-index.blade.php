@extends('frontend.layouts.layout-doctor')
@section('title','Home')
@section('style')
    <style>
        html, body {
            height: 100%;
        }

        main {
            height: 100%;
        }

        .menu {
            padding-top: 5px;
        }
    </style>
@endsection
@section('content')
    <div class="home-page">
        <div class="container">
            <h2>Leading the way in medical excellence</h2>
            <p>Earth greater grass for good. Place for divide evening yielding them that. Creeping beginning over
                gathered brought</p>
            <?php
            $doctor = DB::table('doctors')
                ->join('users', 'doctors.id', '=', 'users.doctor_id')
                ->select('doctors.*', 'users.doctor_id as doctor_id')
                ->where('users.id', '=', Auth::id())
                ->first();
            $examinations = \App\Examination::where('doctor_id', $doctor->id)->get();
            ?>
            @if($examinations->count() < 1)
                <form method="post" action="{{route('examinations.store')}}">
                    @csrf
                    <input type="hidden" name="doctor_id" value="{{$doctor->id}}">
                    <button type="submit" class="btn-find-doctor stat-work">Stat work</button>
                </form>
            @else
                <form method="post" action="{{route('examinations.destroyDoctor')}}">
                    @method('DELETE')
                    @csrf
                    <button class="btn-find-doctor stop-work" data-toggle="modal"
                            data-target="#examination">Stop work
                    </button>
                </form>
                <a href="{{route('frontend.getExamination')}}"><button class="btn btn-primary mt-2" >Start examination</button></a>
            @endif
        </div>
    </div>
    <div class="modal fade" id="examination" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
         data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="examination-content">
                    <i class="far fa-question-circle"></i>
                    <h2>Start the examination!</h2>
                    <a href="examination.html">
                        <button class="btn btn-primary btn-examnination">Yes</button>
                    </a>
                    <button class="btn btn-danger btn-examnination" data-dismiss="modal">Cancle</button>
                </div>
            </div>
        </div>
    </div>
@endsection

