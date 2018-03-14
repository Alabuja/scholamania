@extends('layouts.app2')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>LOGIN</h1>
        {{-- <p>We offer the most complete house renovating services in the country</p> --}}
        <div class="page_nav"><span>You are here:</span> <a href="{{ url('/')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Login</span></div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->
<section id="faq" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                {{-- <p>For existing users only. To register you school as an SRWC Centre, please <b>email info@scholamania.org.ng</b> or <strong> call: 08159599845</strong></p> --}}
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                
                <form class="form-horizontal" role="form" method="POST" action="{{url('individual/authenticate')}}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ url('individual/password/reset') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection
