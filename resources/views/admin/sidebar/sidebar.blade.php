<!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('dashboard')}}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="{{url('dashboard')}}"><img src="{{ asset('images/logo2.png') }}" alt="Logo"></a>
            </div>
    
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{url('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Setup</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Settings</a>
                        <ul class="sub-menu children dropdown-menu">
                            {{-- <li><i class="fa fa-puzzle-piece"></i><a href="{{url('manage-clients/create')}}">Manage Client Types</a></li> --}}
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{url('manage_department')}}">Manage Departments</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{url('manage_designation')}}">Manage Designations</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{url('manage_event')}}">Personal Events</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>People</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{url('manage_employee')}}">Manage Employee</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Manage Clients</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Manage Refrences</a></li>
                            
                        </ul>
                    </li>
    
                    <h3 class="menu-title">HRM</h3><!-- /.menu-title -->
    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Payroll Management</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{url('manage_salary')}}">Manage Salary</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="#">Salary List</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Make Payment</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Generate Payslip</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Manage Bonus</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Manage Deduction</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Loan Management</a></li>
                            <li><i class="fa fa-table"></i><a href="#">Provident Fund</a></li>
                            
                        </ul>
                    </li>
                    <!--<li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>-->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Attendance Management</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="#">Manage Attendance</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="#">Attendance Report</a></li>
                        </ul>
                    </li>
    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Leave Application</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="#">Manage Leave Application</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->