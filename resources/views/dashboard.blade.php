@extends('Welcome')
@section('title', 'Dashboard')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <h2>Dashboard</h2>
            <p>Hello Marcos, Welcome to Sislac</p>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="detail_box">
                <h4>Patients Today
                </h4>
                <div class="detail_c">
                    <h2>32</h2>
                    <p>+14% Inc</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="detail_box">
                <h4>Exams Today
                </h4>
                <div class="detail_c">
                    <h2>85</h2>
                    <p>+14% Inc</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="detail_box">
                <h4>Results to release
                </h4>
                <div class="detail_c">
                    <h2>101</h2>
                    <p>+14% Inc</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="detail_box">
                <h4>Patients in month
                </h4>
                <div class="detail_c">
                    <h2>803</h2>
                    <p>+14% Inc</p>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection