@extends('layouts.app2')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>PROFILE</h1>
        <p></p>
        <div class="page_nav"><span>You are here:</span> <a href="{{ url('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Profile</span></div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->
<section id="faq" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Profile</div>                
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success">{!! Session::get('success') !!}</div>
                @endif
                @if (Session::has('failure'))
                    <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
                @endif
    		</div>			
            <form role="form" action="{{ url('updateprofile') }}" method="POST">

                {{ csrf_field() }}
                <div class="col-md-8 col-md-offset-2">
                        {{-- <div class="box-body"> --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="control-label">School Name</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{Auth::user()->name}}" disabled>
                        </div> 
                        <div class="form-group{{ $errors->has('address') ? 'has-error': ''}} required">
                            <label for="address" class="control-label">School Address</label>
                            <input class="form-control" type="text" id="address" name="address" value="{{Auth::user()->address}}">
                            @if($errors->has('address'))
                                <span class="help-block">{{ $errors->first('address') }}</span>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('phone_number') ? 'has-error': ''}} required">
                            <label for="phone_number" class="control-label">Phone Number</label>
                            <input class="form-control" type="number" id="phone_number" name="phone_number" value="{{Auth::user()->phone_number}}">
                            @if($errors->has('phone_number'))
                                <span class="help-block">{{ $errors->first('phone_number') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email Address</label>
                            <input class="form-control" type="email" id="email" name="email" value="{{Auth::user()->email}}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('username') ? 'has-error': ''}} required">
                            <label for="username" class="control-label">Username</label>
                            <input class="form-control" type="text" id="username" name="username" value="{{Auth::user()->username}}">
                            @if($errors->has('username'))
                                <span class="help-block">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('student_number') ? 'has-error': ''}} required">
                            <label for="student_number" class="control-label">Number of Champs</label>
                            <input class="form-control" type="number" id="student_number" name="student_number" value="{{Auth::user()->student_number}}">
                            @if($errors->has('student_number'))
                                <span class="help-block">{{ $errors->first('student_number') }}</span>
                            @endif
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                               
                    </div> --}}
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection
