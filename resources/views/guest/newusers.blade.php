@extends('guest.layouts.app')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>New Guest Register </h1>
        <p>We offer the most complete house renovating services in the country</p>
        <div class="page_nav"><span>You are here:</span> <a href="{{ url('/')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Register</span></div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->
<section id="faq" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>To register as an individual on SRWC, please follow the steps below</p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('layouts.alerts')
                <form role="form" action="{{ url('newregister') }}" method="POST">
                    {{ csrf_field() }}
	            <div class="col-md-6">
	            	<div class="form-group {{ $errors->has('name') ? 'has-error': ''}} required">
		                <label for="name">Fullname</label>
		                <input type="text" name="name" class="form-control" id="name" placeholder="Type Your Fullname" required>
		                @if($errors->has('name'))
		                    <span class="help-block">{{ $errors->first('name') }}</span>
		                @endif
		            </div>
		            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} required">
	                    <label for="email">E-Mail Address</label>
	                    <input id="email" type="email" placeholder="E-Mail Address" class="form-control" name="email" value="{{ old('email') }}">
	                    @if ($errors->has('email'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('email') }}</strong>
	                        </span>
	                    @endif
	                </div>
	            </div>
	            <div class="col-md-6">
	            	<div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
	                    <label for="phone_number" >Phone Number</label>
	                    <input id="phone_number" type="number" placeholder="Phone Number" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
	                    @if ($errors->has('phone_number'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('phone_number') }}</strong>
	                        </span>
	                    @endif
	                </div>
	                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
	                    <label for="address" >Address</label>
	                    <input id="address" type="text" placeholder="Twitter Handle" class="form-control" name="address" value="{{ old('address') }}">

	                    @if ($errors->has('address'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('address') }}</strong>
	                        </span>
	                    @endif
	                </div>
	            </div>
	            <div class="col-md-6">
	            	<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} required">
	                    <label for="username" >Username</label>
	                    <input id="username" type="text" placeholder="Username" class="form-control" name="username" value="{{ old('username') }}">
	                    @if ($errors->has('username'))
	                        <span class="help-block">
	                            <strong>{{ $errors->first('username') }}</strong>
	                        </span>
	                    @endif
	                </div>
	            </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection
