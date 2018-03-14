<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('css/custom.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ URL::asset('dist/css/skins/_all-skins.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/datepicker/datepicker3.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker-bs3.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
        <!-- Logo -->
            <a href="{{ url('admin/dashboard')}}" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>S</b>RWC</span>
              <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>SReaders</b>&WC</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ URL::asset('dist/img/logoschol1.png')}}" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{ Auth::guard('admin')->user()->username }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ URL::asset('dist/img/logoschol1.png')}}" class="img-circle" alt="User Image">
                                    <p>
                                        {{ Auth::guard('admin')->user()->username }}
                                    </p>
                                </li>
                                <li class="pull-left">
                                  <a href="{{ url('admin/update') }}">Change password</a>
                                </li>
                                <br>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        {{-- <a href="{{url('admin/logout') }}" class="btn btn-default btn-flat">Sign out</a> --}}
                                        {{-- <li> --}}
                                            <a href="{{ url('admin/logout') }}" class="btn btn-default btn-flat" 
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Sign Out
                                            </a>

                                            <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        {{-- </li> --}}
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        {{-- <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </header>

    <!-- Left side column. contains the logo and sidebar -->
          <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::asset('dist/img/logoschol1.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::guard('admin')->user()->username }}</p>
          {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> --}}
        </div>
      </div>

       <!-- search form -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> --}}
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        {{-- <li class="header">MAIN NAVIGATION</li> --}}
        <li class="treeview {{ Request::is('admin/dashboard') ? 'active' : '' }}">
          <a href="{{ url('admin/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview {{ Request::is('admin/coach') ? 'active' : '' }}">
            <a href="{{ url('admin/coach') }}">
                <i class="fa fa-dashboard"></i> <span>Add Coaches</span>
            </a>
        </li>
        <li class="treeview {{ Request::is('admin/coaches_view') ? 'active' : '' }}">
            <a href="{{ url('admin/coaches_view') }}">
                <i class="fa fa-dashboard"></i> <span>View Coaches</span>
            </a>
        </li>
        
        <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Categories (Add)</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="treeview {{ Request::is('admin/users') ? 'active' : '' }}">
                    <a href="{{ url('admin/users') }}">
                        <i class="fa fa-dashboard"></i> <span>Add Centers</span>
                    </a>
                </li>
                <li class="treeview {{ Request::is('admin/individuals') ? 'active': '' }}">
                    <a href="{{ url('admin/individuals') }}">
                        <i class="fa fa-dashboard"></i> <span>Add Individuals</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Categories (View)</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="treeview {{ Request::is('admin/centers') ? 'active' : '' }}">
                    <a href="{{ url('admin/centers') }}">
                        <i class="fa fa-dashboard"></i> <span>View Centers</span>
                    </a>
                </li>
                <li class="treeview {{ Request::is('admin/individuals/all') ? 'active': '' }}">
                    <a href="{{ url('admin/individuals/all') }}">
                        <i class="fa fa-dashboard"></i> <span>View Individuals</span>
                    </a>
                </li>
            </ul>
        </li>
      
        <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Resources</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="treeview {{ Request::is('admin/resources') ? 'active': '' }}">
                    <a href="{{ url('admin/resources') }}">
                        <i class="fa fa-dashboard"></i> <span>Add Resources (Centers)</span>
                    </a>
                </li>
                <li class="treeview {{ Request::is('admin/individual/resources') ? 'active': '' }}">
                    <a href="{{ url('admin/individual/resources') }}">
                        <i class="fa fa-dashboard"></i> <span>Add Resources (Individuals)</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Assignments</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="treeview {{ Request::is('admin/assignment') ? 'active': '' }}">
                    <a href="{{ url('admin/assignment') }}">
                        <i class="fa fa-dashboard"></i> <span>Assignments (Centers)</span>
                    </a>
                </li>
                <li class="treeview {{ Request::is('admin/individual/assignment') ? 'active': '' }}">
                    <a href="{{ url('admin/individual/assignment') }}">
                        <i class="fa fa-dashboard"></i> <span>Assignment (Individuals)</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Scores</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li class="treeview {{ Request::is('admin/score') ? 'active' : '' }}">
                    <a href="{{ url('admin/score') }}">
                        <i class="fa fa-dashboard"></i> <span>Add Score - (Points - Centers)</span>
                    </a>
                </li>
                <li class="treeview {{ Request::is('admin/individual/score') ? 'active': '' }}">
                    <a href="{{ url('admin/individual/score') }}">
                        <i class="fa fa-dashboard"></i> <span>Add Score (Individuals)</span>
                    </a>
                </li>
            </ul>
        </li>
        {{-- <li class="treeview {{ Request::is('admin/update') ? 'active' : '' }}">
            <a href="{{ url('admin/update') }}">
                <i class="fa fa-dashboard"></i> <span>Add Score (Points)</span>
            </a>
        </li> --}}

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    
    @yield('content')

    </div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="{{ URL::asset('plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ URL::asset('plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ URL::asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/js/demo.js')}}"></script>
</body>
</html>
