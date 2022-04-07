<header>
    <div class="row align-items-center">
        <div class="col-lg-3">
            <img src="{{ URL::asset('img/logo.PNG') }}" width="155px" />
        </div>
        <div class="col-lg-9">
            <div class="header_menu">
                <div class="help">

                    User:  <?php
                    $user = Auth::user();
                    echo $user->name; ?>

                    <a href="{{ route('logout') }}">Logout</a>




                    <i class="fa fa-solid fa-question"></i>
                </div>

            </div>

        </div>
    </div>
</header>