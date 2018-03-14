@extends('admin.layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Add Centers
                <small>Dasboard</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Add Centers</li> 
            </ol>
        </section>

        <!-- Main content -->
        <section class="content clearfix">
            <!-- Small boxes (Stat box) -->
            <div class="col-lg-9 col-lg-offset-2">

                <div class="box">
                    <div class="box-header">
                        
                    </div>
                    @include('layouts.alerts')
                    <div class="box-body">
                        <form role="form" action="{{ url('admin/users') }}" method="POST">

                            {{ csrf_field() }}

                            {{-- <div class="box-body"> --}}
                                <div class="form-group {{ $errors->has('name') ? 'has-error': ''}} required">
                                    <label for="name">Enter Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') ?: ''}}" required>
                                    @if($errors->has('name'))
                                        <span class="help-block">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('username') ? 'has-error': ''}} required">
                                    <label for="username">Enter Username</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" value="{{ old('username') ?: ''}}" required>
                                    @if($errors->has('username'))
                                        <span class="help-block">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('email') ? 'has-error': ''}} required">
                                    <label for="email">Enter Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{ old('email') ?: ''}}" required>
                                    @if($errors->has('email'))
                                        <span class="help-block">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('address') ? 'has-error': ''}} required">
                                    <label for="address">Enter Address</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" value="{{ old('address') ?: ''}}" required>
                                    @if($errors->has('address'))
                                        <span class="help-block">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>

                                {{-- <div class="form-group{{ $errors->has('image') ? 'has-error': ''}} required">
                                    <label for="image" class="control-label">Center Logo</label>
                                    <input class="form-control" type="file" id="image" name="image">
                                    @if($errors->has('image'))
                                        <span class="help-block">{{ $errors->first('image') }}</span>
                                    @endif
                                </div> --}}
                                <div class="form-group {{ $errors->has('phone_number') ? 'has-error': ''}} required">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="number" name="phone_number" class="form-control" id="phone_number" placeholder="Enter Phone Number" value="{{ old('phone_number') ?: ''}}" required>
                                    @if($errors->has('phone_number'))
                                        <span class="help-block">{{ $errors->first('phone_number') }}</span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? 'has-error': ''}} required">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>

                                </div>
                                <div class="col-xs-3">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Add new User</button>
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