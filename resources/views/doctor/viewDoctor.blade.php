@extends('welcome')
@section('title', 'Appointment')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <h2>View Doctor</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="detail_box">
                    <table class="table sislac_table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>CRM</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Specialty</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Doctor as $doctors)
                            <tr>
                                <td>{{$doctors['id']}} </td>
                                <td>{{$doctors['DoctorName']}}</td>
                                <td>{{$doctors['DoctorCRM']}}</td>
                                <td>{{$doctors['DoctorPhone']}}</td>
                                <td>{{$doctors['DoctorEmail']}}</td>
                                <td>{{$doctors['DoctorSpecialty']}}</td>



                            </tr>

                        @endforeach

                        </tbody>


                </div>
            </div>
        </div>





    </div>

@endsection

