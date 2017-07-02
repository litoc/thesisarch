    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">                
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('admin/img/avatar3.png') }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, {{ title_case(Auth::user()->name) }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-dashboard fa-fw"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('announcement') }}">
                        <i class="ion ion-paper-airplane"></i> <span>Announcement</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('thesis') }}">
                        <i class="fa fa-file-o fa-fw"></i> <span>Thesis</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">                
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ title_case(Route::currentRouteName()) }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"> {{ title_case(Route::currentRouteName()) }} </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                @yield('container')
            </div>
        </section><!-- /.content -->
    </aside><!-- /.right-side -->