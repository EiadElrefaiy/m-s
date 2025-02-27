<header id="header" class="header mb-2">
    <div class="header-menu">
        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                <a href="#" id="language" aria-haspopup="true" aria-expanded="true">
                    <i class="flag-icon flag-icon-sa mt-2"></i>
                </a>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if(Auth::check() && Auth::user()->image)
                    <img class="user-avatar rounded-circle" src="{{ URL::asset(Auth::user()->image) }}" alt="User Avatar">
                @else
                    <img class="user-avatar rounded-circle" src="{{ URL::asset('images/admin.jpg') }}" alt="User Avatar">
                @endif
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="{{ route('edit' , ['table' => 'users' , 'view' => 'dashboard.sections.profile' , 'id'=>auth()->user()->id])}}"><i class="fa fa-user"></i> My Profile</a>
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
