@extends('welcome')
@section('title', 'Appointment')

@section('content')
    <?php
    $mytime = Carbon\Carbon::now();
    ?>
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <h2>New Appointment</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="detail_box">
                    <form action="{{ route('addappointment') }}" name="appointmentForm" method="post">
                        @csrf
                        <div class="auto_details_box">
                            <div class="row">
                                <div class="col-lg-3">
                                    <b>Id Appointment</b>
                                    <p><input type="hidden" name="" /> </p>
                                </div>
                                <div class="col-lg-3">
                                    <b>Date</b>
                                    <p><?php  echo $mytime->toDateString();?></p>
                                    <input type="hidden" name="appointmentDate" value="<?php echo $mytime->toDateString(); ?>" />
                                    <input type="hidden" name="appointmentTime" value="<?php echo $mytime->toTimeString(); ?>" />
                                </div>
                                <div class="col-lg-3">
                                    <b>Password</b>
                                    <p id="showPassword"> </p>
                                    <input name="row_password" type="hidden">
                                    <img onload="randomPassword()"  src="https://s0.2mdn.net/sadbundle/2037221852633473138/72-3.jpg" />

                                </div>
                                <div class="col-lg-3">
                                    <b>User</b>
                                    <p><?php
                                        $user = Auth::user();
                                        echo $user->name; ?></p>
                                    <input type="hidden" name="appointmentByUser" value="<?php
                                    $user = Auth::user();
                                    echo $user->name; ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="form_box">
                            <div class="row">
                                <div class="col-lg-7 pr_40">
                                    <div class="row colbox">
                                        <div class="col-lg-8">
                                            <label>Patient Name</label>
                                            <input class="form-control" name="patientName" type="text" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Sex</label>
                                            <select name="patientSex" class="form-control" required>
                                                <option selected disabled>Choose</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="row colbox">
                                        <div class="col-lg-3">
                                            <label>Birth date</label>
                                            <input class="form-control" name="patientDOB" type="date" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="ex2">Age</label>
                                            <input class="form-control" name="patientAge" required type="text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="ex2">RG</label>
                                            <input class="form-control" name="patientRG" type="text" required>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>CFT</label>
                                            <input class="form-control" name="patientCFT" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row colbox">
                                        <div class="col-lg-3">
                                            <label>Zip code</label>
                                            <input class="form-control" name="patientZipcode" type="text" required>
                                        </div>
                                        <div class="col-lg-9">
                                            <label>Address</label>
                                            <input class="form-control" name="patientAddress" type="text" required>
                                        </div>
                                    </div>
                                    <div class="row colbox">
                                        <div class="col-lg-7">
                                            <label>City</label>
                                            <input class="form-control" name="patientCity" type="text">
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Phone</label>
                                            <input class="form-control" name="patientPhone" type="tel">
                                        </div>
                                    </div>
                                    <div class="row colbox">
                                        <div class="col-lg-7">
                                            <label>Responsible</label>
                                            <input class="form-control" name="patientResponsible" type="text">
                                        </div>
                                        <div class="col-lg-5">
                                            <label>Email</label>
                                            <input class="form-control" name="patientEmail" type="tel">
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
                                             <input class="form-control" name="patientCRM" type="text">
                                         </div>
                                         <div class="col-lg-3">
                                             <label>Requester/ Doctor</label>
                                             <input class="form-control" name="patientRequester" type="text">
                                         </div>
                                        <div class="col-lg-2">
                                            <label>Code</label>
                                            <input class="form-control" name="patientCode" type="text">
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Health insurance</label>
                                            <input class="form-control" name="patientHealthInsurance" type="text">
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Company</label>
                                            <input class="form-control" name="patientCompany" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="auto_details_box">
                            <div class="row">
                                <div class="col-lg-2">
                                    <b>Exams</b>

                                </div>
                                <div class="col-lg-2">
                                    <b>Item</b>
                                </div>
                                <div class="col-lg-2">
                                    <b>Exam Name</b>

                                </div>
                                <div class="col-lg-2">
                                    <b>Code AMB</b>
                                </div>

                                <div class="col-lg-2">
                                    <b>Collection Date</b>
                                </div>

                                <div class="col-lg-2">
                                    <b>Price R$</b>
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

<script type="text/javascript">
    function randomPassword() {
        var length = 6;
        var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOP1234567890";
        var pass = "";
        for (var x = 0; x < length; x++) {
            var i = Math.floor(Math.random() * chars.length);
            pass += chars.charAt(i);
        }
        appointmentForm.row_password.value = pass;

        document.getElementById("showPassword").innerHTML = pass;

    }
</script>