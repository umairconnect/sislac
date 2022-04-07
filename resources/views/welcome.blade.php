@extends('layout/webheader')
    <body>
    <div class="container-fluid">

        <!-- header -->
        @include('layout.header')

        <div class="row">
            <div class="col-lg-2">
                <div class="sidebar">
                    <!-- Navigation -->
                    @include('layout.routes')
                </div>
            </div>
            <div class="col-lg-10">

                @yield('content')
            </div>
        </div>
    </div>


    </body>

</html>


