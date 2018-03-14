@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add Resources
                <small>Dasboard</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Add Resources</li> 
            </ol>
        </section>

        <!-- Main content -->
        <section class="content clearfix">
            <!-- Small boxes (Stat box) -->
            <div class="col-lg-7">

                <div class="box">
                    <div class="box-header">
                        
                    </div>

                    <div class="box-body">
                        @include('layouts.alerts')
                        <form role="form" action="{{ url('admin/resources') }}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            {{-- <div class="box-body"> --}}
                                <div class="form-group {{ $errors->has('name') ? 'has-error': ''}} required">
                                    <label for="name">Enter File</label>
                                    <input type="file" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') ?: ''}}" required>
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                {{-- <div class="form-group{{ $errors->has('actualfile') ? 'has-error': ''}} required">
                                    <label for="actualfile" class="control-label">File (.pdf,docx,doc,xls,xlsx)</label>
                                    <input class="form-control" type="file" id="actualfile" name="actualfile">
                                    @if($errors->has('actualfile'))
                                        <span class="help-block">{{ $errors->first('actualfile') }}</span>
                                    @endif
                                </div> --}}
                         
                                <div class="col-xs-3">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Add Resources</button>
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