<?php

namespace App\Http\Controllers\Appointment;

use App\Http\Controllers\Controller;
use App\Models\appointment;
use Illuminate\Http\Request;

class NewAppointment extends Controller
{
    function addNewAppointment (Request $Req) {

        $appointment = new Appointment;

        $appointment->appointmentId = $Req->appointmentId;

        $appointment->appointmentdate = $Req->appointmentDate;

        $appointment->appointmentpassword = $Req->row_password;

        $appointment->requestbyuser = $Req->appointmentByUser;

        $appointment->save();

        redirect('dashboard');


    }

}
