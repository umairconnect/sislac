<ul class="side_nav">
    <li>
        <a href="{{route('dashboard')}}" class="{{(request()->is('dashboard')) ? 'active' : '' }}">Dashboard</a>
    </li>
    <li>
        <a href="{{route('new-appointment')}}" class="{{(request()->is('new-appointment')) ? 'active' : '' }}">Appointment</a>

    </li>
</ul>