<nav id="sidebar">

<ul class="side_nav">
    <li>
        <a href="{{route('dashboard')}}" class="{{(request()->is('dashboard')) ? 'active' : '' }}">
            <i class="fa-solid fa-house"></i> Dashboard</a>
    </li>
    <li>
        <a class="{{(request()->is('new-appointment')) ? 'active' : '' }}"><i class="fa fa-calendar"></i> Appointment</a>

        <ul class="" id="homeSubmenu">
            <li><a href="{{route('new-appointment')}}" >New Appointment</a></li>
            <li><a href="{{route('viewAppointment')}}">View Appointment</a></li>

        </ul>
    </li>
</ul>
</nav>