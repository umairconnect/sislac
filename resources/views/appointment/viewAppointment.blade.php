@extends('Welcome')
@section('title', 'Appointment')

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <h2>New Appointment</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="detail_box">
                    <table class="table sislac_table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Request</th>
                            <th>Result</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointment as $appoint)
                            <tr>
                                <td>{{$appoint['id']}} </td>
                                <td>{{$appoint['appointmentdate']}}</td>
                                <td>{{$appoint['patientname']}}</td>
                                <td>Solicitação do Cliente</td>
                                <td>Confirm</td>
                                <td>Pending</td>
                                <td>
                                    <i class="fa fa-pencil"></i>
                                    <i class="fa fa-trash"></i>
                                </td>


                            </tr>

                        @endforeach

                        </tbody>


                </div>
            </div>
        </div>





    </div>

@endsection

