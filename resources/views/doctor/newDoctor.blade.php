@extends('welcome')
@section('title', 'Appointment')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <h2>Register Doctor</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="detail_box">
                    <form action="{{ route('addDoctor') }}" name="doctorform" method="post">
                        @csrf

                        <div class="form_box">
                            <div class="row">
                                <div class="col-lg-7 pr_40">
                                    <div class="row colbox">
                                        <div class="col-lg-8">
                                            <label>Doctor Name</label>
                                            <input class="form-control" name="DoctorName" type="text" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Sex</label>
                                            <select name="DoctorSex" class="form-control" required>
                                                <option selected disabled>Choose</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="row colbox">
                                        <div class="col-lg-4">
                                            <label>CPF</label>
                                            <input class="form-control" name="DoctorCPF" type="text" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="ex2">CRM</label>
                                            <input class="form-control" name="DoctorCRM" required type="text">
                                        </div>

                                        <div class="col-lg-4">
                                            <label>Aadvice</label>
                                            <input class="form-control" name="DoctorAadvice" type="text" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="ex2">Specialty</label>
                                            <input class="form-control" name="DoctorSpecialty" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row colbox">
                                        <div class="col-lg-3">
                                            <label>Zip code</label>
                                            <input class="form-control" name="DoctorZipcode" type="text" required>
                                        </div>
                                        <div class="col-lg-9">
                                            <label>Street/ Ave</label>
                                            <input class="form-control" name="DoctorStreet" type="text" required>
                                        </div>
                                    </div>
                                    <div class="row colbox">
                                        <div class="col-lg-7">
                                            <label>City</label>
                                            <input class="form-control" name="DoctorCity" type="text">
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Phone</label>
                                            <input class="form-control" name="DoctorPhone" type="tel">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row colbox">
                                        <div class="col-lg-3">
                                            <label>Email</label>
                                            <input class="form-control" name="DoctorEmail" type="email">
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Password</label>
                                            <input class="form-control" name="DoctorPassword" type="password">
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