<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>ATA</b>A</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>AMA Thesis Archive</b>Archive</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="user user-menu">
                    <a href="#">
                        <span class="hidden-xs">Last logged in: {{ '3hrs ago' }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('adminLogout') }}">
                        <i class="fa fa-sign-out fa-5"><span> Log out </span></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>