@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Single Center
                <small>Dasboard</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Single Center</li> 
            </ol>
        </section>

        <!-- Main content -->
        <section class="content clearfix"> 
            <!-- Small boxes (Stat box) -->
            <div class="col-lg-6 col-lg-offset-3">

                <div class="box">
                    <div class="box-header">
                        
                    </div>

                    <div class="box-body" style="text-align: center;">
                        {{-- <p><img src="{{url($user->image)}}" style="width: 120px; height: 120px; border-radius: 50%;"></p> --}}
			            <p><strong>Name: </strong>{{$guests->name}}</p>
			            <p><strong>Address: </strong>{{$guests->address}}</p>
			            <p><strong>Email Address: </strong>{{$guests->email}}</p>
			            <p><strong>Phone Number: </strong>{{$guests->phone_number}}</p>
                        
                    </div><!-- /.box-body -->

                </div>



            </div><!-- /.row -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; {{ year_range(2017) }}  <a href="#">Scholamania Readers and Writer's Club</a> |</strong> All Rights Reserved.
    </footer>

    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
     <div class="control-sidebar-bg"></div>

@endsection