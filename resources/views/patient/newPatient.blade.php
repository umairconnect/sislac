@extends('welcome')
@section('title', 'Appointment')

@section('content')
    <?php
    $mytime = Carbon\Carbon::now();
    ?>
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <h2>New Patient</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="detail_box">
                    <form action="{{ route('addpatient') }}" name="appointmentForm" method="post">
                        @csrf

                        <div class="form_box">
                            <div class="row">
                                <div class="col-lg-7 pr_40">
                                    <div class="row colbox">
                                        <div class="col-lg-8">
                                            <label>Patient Name</label>
                                            <input class="form-control" name="PatientName" type="text" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Sex</label>
                                            <select name="Sex" class="form-control" required>
                                                <option selected disabled>Choose</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="row colbox">
                                        <div class="col-lg-3">
                                            <label>Birth date</label>
                                            <input class="form-control" name="BirthDate" type="date" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="ex2">Age</label>
                                            <input class="form-control" name="Age" required type="text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="ex2">RG</label>
                                            <input class="form-control" name="RG" type="text" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>CFT</label>
                                            <input class="form-control" name="CPF" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row colbox">
                                        <div class="col-lg-3">
                                            <label>Zip code</label>
                                            <input class="form-control" name="ZipCode" type="text" required>
                                        </div>
                                        <div class="col-lg-9">
                                            <label>Address</label>
                                            <input class="form-control" name="Address" type="text" required>
                                        </div>
                                    </div>
                                    <div class="row colbox">
                                        <div class="col-lg-7">
                                            <label>City</label>
                                            <input class="form-control" name="City" type="text">
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Phone</label>
                                            <input class="form-control" name="Phone" type="tel">
                                        </div>
                                    </div>
                                    <div class="row colbox">
                                        <div class="col-lg-7">
                                            <label>Responsible</label>
                                            <input class="form-control" name="Resposible" type="text">
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Email</label>
                                            <input class="form-control" name="Email" type="tel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row colbox">
                                        <div class="col-lg-2">
                                            <label>CRM *</label>
                                            <input class="form-control" name="CRM" type="text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Requester/ Doctor</label>
                                            <input class="form-control" name="Requester" type="text">
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Code</label>
                                            <input class="form-control" name="Code" type="text">
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Health insurance</label>
                                            <input class="form-control" name="HealthInsurance" type="text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Company</label>
                                            <input class="form-control" name="patientCompany" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row colbox">
                                        <div class="col-lg-3">
                                            <label>Enrollment</label>
                                            <input class="form-control" name="Enrollment" type="text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Plan</label>
                                            <input class="form-control" name="Plan" type="text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Observation</label>
                                            <input class="form-control" name="Observation" type="text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Social Name</label>
                                            <input class="form-control" name="SocialName" type="text">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form_box">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <div class="">
                                        <button class="btn btn-outline-dark" type="">Cancel</button>
                                        <button  class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
