    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">AMA Thesis Archive</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Archive</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#announcement">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('adminLogout') }}">
                                Logout
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="subcribe">Register</a>
                        </li>

                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{ route('adminLogin') }}">Admin</a>
                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Login as</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" id="loginAsStudent" href="#">Student</a>
                                <a class="dropdown-item" href="{{ route('adminLogin') }}">Administrator</a>
                            </div>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
