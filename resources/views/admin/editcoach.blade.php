@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add Coaches
                <small>Dasboard</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Add Coaches</li> 
            </ol>
        </section>

        <!-- Main content -->
        <section class="content clearfix">
            <!-- Small boxes (Stat box) -->
            <div class="col-lg-6 col-lg-offset-3">

                <div class="box">
                    <div class="box-header">
                        
                    </div>
                    @include('layouts.alerts')
                    <div class="box-body">
							
							<form role="form" method="POST" action="{{ url('admin/coach/' . $coach->id) }}">
				                {{ csrf_field() }}

				                <div class="form-group{{ $errors->has('coach_name') ? ' has-error' : '' }} required">
				                    <label for="coach_name">Edit Coach</label>
				                    <input id="coach_name" type="text" class="form-control" name="coach_name" value="{!! $coach->coach_name !!}" style="text-transform: capitalize;">

				                    @if ($errors->has('coach_name'))
				                        <span class="help-block">
				                            <strong>{{ $errors->first('coach_name') }}</strong>
				                        </span>
				                    @endif
				                   </div>

	                            <div class="col-xs-3">
	                                <button type="submit" class="btn btn-primary btn-block btn-flat">Add Coaches </button>
	                            </div>
                            </form>
                    </div>
                        
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