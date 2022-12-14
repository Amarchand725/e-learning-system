<header class="main-header">
    <a href="{{ route('admin.dashboard') }}" class="logo">
        <span class="logo-lg">{{ Auth::user()->name }}</span>
    </a>

    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        @if(Auth::check() && Auth::user()->hasRole('Admin'))
            <span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>
        @else 
            <span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Instructor Panel</span>
        @endif

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/') }}" target="_blank">Visit Website</a>
                </li>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if(Auth::user()->image)
                            <img src="{{ asset('public/admin/img') }}/{{ Auth::user()->image }}" class="user-image" alt="user photo">
                        @else
                            <img src="{{ asset('public/admin/img/dummy-user.png') }}" class="user-image" alt="user photo">
                        @endif
                        <span class="hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div>
                                @if(Auth::user()->hasRole('Admin'))
                                    <a href="{{ route('admin.profile.edit') }}" class="btn btn-default btn-flat">Edit Profile</a>
                                @elseif(Auth::user()->hasRole('Instructor'))
                                    <a href="{{ route('instructor.profile.edit') }}" class="btn btn-default btn-flat">Edit Profile</a>
                                @else 
                                    <a href="{{ route('user.profile.edit') }}" class="btn btn-default btn-flat">Edit Profile</a>
                                @endif
                            </div>
                            <div>
                                <a class="dropdown-item btn btn-default btn-flat" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

    </nav>
</header>
