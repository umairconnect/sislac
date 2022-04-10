<?php

namespace App\Http\Controllers\Appointment;

use App\Http\Controllers\Controller;
use App\Models\appointment;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class NewAppointment extends Controller
{
    function addNewAppointment (Request $Req) {

        $appointment = new Appointment;

        $appointmentid = IdGenerator::generate(['table' => 'appointments', 'length' => 6, 'prefix' => date('y')]);

        $appointment->appointmentId =  $appointmentid;

        $appointment->appointmentdate = $Req->appointmentDate;

        $appointment->appointmentpassword = $Req->row_password;

        $appointment->requestbyuser = $Req->appointmentByUser;

        $appointment->patientname = $Req->patientName;

        $appointment->patientsex = $Req->patientSex;

        $appointment->patientdob = $Req->patientDOB;

        $appointment->patientage = $Req->patientAge;

        $appointment->patientrg = $Req->patientRG;

        $appointment->patientcpf = $Req->patientCFT;

        $appointment->patientzip = $Req->patientZipcode;

        $appointment->patientaddress = $Req->patientAddress;

        $appointment->patientcity = $Req->patientCity;

        $appointment->patientphone = $Req->patientPhone;

        $appointment->patientresponsible = $Req->patientResponsible;

        $appointment->patientemail = $Req->patientEmail;

        $appointment->patientcrm = $Req->patientCRM;

        $appointment->patientrequester = $Req->patientRequester;

        $appointment->patientcode = $Req->patientCode;

        $appointment->patienthealthinsurance = $Req->patientHealthInsurance;

        $appointment->patientcompany = $Req->patientCompany;

        $appointment->save();



        return redirect('dashboard');


    }

}
