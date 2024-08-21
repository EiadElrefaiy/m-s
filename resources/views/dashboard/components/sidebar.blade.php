    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="{{ URL::asset('assets/site/assets/images/logo.png') }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{ URL::asset('assets/site/assets/images/logo2.png') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">Management</h3>
                    <li>
                        <a href="{{ route('edit' , ['table' => 'users' , 'view' => 'dashboard.sections.profile' , 'id'=>auth()->user()->id])}}"> <img class="menu-icon" src="{{URL::asset('images/user.png')}}" style="width: 17px; margin-right: 35px;"></i>My Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'users', 'view' => 'dashboard.sections.admins']) }}"> <img class="menu-icon" src="{{URL::asset('images/users.png')}}" style="width: 17px; margin-right: 35px;"></i>Admins</a>
                    </li>
                    <h3 class="menu-title">Website dashboard</h3>
                    <li>
                        <a href="{{ route('index', ['table' => 'header', 'view' => 'dashboard.sections.header']) }}"> <img class="menu-icon" src="{{URL::asset('images/header.png')}}" style="width: 17px; margin-right: 35px;"></i>Header</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'sliders', 'view' => 'dashboard.sections.sliders']) }}"> <img class="menu-icon" src="{{URL::asset('images/slider.png')}}" style="width: 18px; margin-right: 35px;"></i>Sliders</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'services', 'view' => 'dashboard.sections.services']) }}"> <img class="menu-icon" src="{{URL::asset('images/responsible.png')}}" style="width: 18px; margin-right: 35px;"></i>Services</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'steps', 'view' => 'dashboard.sections.steps']) }}"> <img class="menu-icon" src="{{URL::asset('images/process.png')}}" style="width: 18px; margin-right: 35px;"></i>Steps</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'steps_points', 'view' => 'dashboard.sections.steps_points']) }}"> <img class="menu-icon" src="{{URL::asset('images/check.png')}}" style="width: 18px; margin-right: 35px;"></i>Steps Points</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'more_services', 'view' => 'dashboard.sections.more_services']) }}"> <img class="menu-icon" src="{{URL::asset('images/quality-service.png')}}" style="width: 18px; margin-right: 35px;"></i>More Services</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'blogs', 'view' => 'dashboard.sections.blogs']) }}"> <img class="menu-icon" src="{{URL::asset('images/blog.png')}}" style="width: 18px; margin-right: 35px;"></i>Blogs</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'reviews', 'view' => 'dashboard.sections.reviews']) }}"> <img class="menu-icon" src="{{URL::asset('images/satisfaction.png')}}" style="width: 18px; margin-right: 35px;"></i>Customers Reviews</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'messages', 'view' => 'dashboard.sections.messages']) }}"> <img class="menu-icon" src="{{URL::asset('images/email.png')}}" style="width: 18px; margin-right: 35px;"></i>Messages</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'newsletter', 'view' => 'dashboard.sections.newsletter']) }}"> <img class="menu-icon" src="{{URL::asset('images/letter.png')}}" style="width: 18px; margin-right: 35px;"></i>Newsletter Subscription</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'footer_services', 'view' => 'dashboard.sections.footer_services']) }}"> <img class="menu-icon" src="{{URL::asset('images/footer.png')}}" style="width: 18px; margin-right: 35px;"></i>Footer Services</a>
                    </li>
                    <li>
                        <a href="{{ route('index', ['table' => 'contacts', 'view' => 'dashboard.sections.contacts']) }}"> <img class="menu-icon" src="{{URL::asset('images/social-media (1).png')}}" style="width: 18px; margin-right: 35px;"></i>Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
