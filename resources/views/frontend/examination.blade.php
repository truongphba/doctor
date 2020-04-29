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
                <h2>Create new medical records</h2>
                <form method="post" action="{{route('records.store')}}">
                    @csrf
                    <input type="hidden" name="doctor_id" value="{{$doctor->doctor_id}}">
                    <input type="hidden" name="patient_id" value="{{$patient->patient_id}}">
                    <div class="records">
                        <div class="row">
                            <div class="col-lg-2">
                                <p>Sysptom</p>
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
                                <p>Diagnosis</p>
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
                                <p>Prescription</p>
                            </div>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Medicine Name</label>
                                            <input type="text" name="medicine" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input type="text" name="amount" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Using</label>
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
                                    <h2>Continue?</h2>
                                    <p>Your account has just been added 1.8$</p>
                                    <button type="submit" class="btn btn-primary btn-examnination">Yes</button>
                                    <a href="{{route('examinations.destroyDoctor')}}"><button class="btn btn-secondary btn-examnination">No</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#money-come"
                        aria-hidden="true" data-backdrop="static" data-keyboard="false">Submit
                </button>
            </div>
            <div class="patient-info">
                <h2>Patient information</h2>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="patient-img">
                            <img src="{{asset($patient->images)}}">
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <table class="table table-infor">
                            <tr>
                                <td>Fullname</td>
                                <td>{{$patient->name}}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{$patient->address}}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{$patient->gender}}</td>
                            </tr>
                            <tr>
                                <td>Date of birth</td>
                                <td>{{$patient->birth}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="old-medical">
                <h2>OLD MEDICAL RECORDS</h2>
                <table class="table .table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Symptom</th>
                        <th>Diagnosis</th>
                        <th>Medicine</th>
                        <th>Amount</th>
                        <th>Using</th>
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
