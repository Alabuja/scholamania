@extends('layouts.app2')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>STUDENTS</h1>
        <p></p>
        <div class="page_nav"><span>You are here:</span> <a href="{{ url('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Students</span></div>
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
	                <div class="panel-heading">Update Number of Students</div>
	            </div>

	            <form class="form-horizontal" role="form" method="POST" action="{{ url('students') }}">
	                {{ csrf_field() }}

	                <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }} required">
	                    <label for="student_number" class="col-md-4 control-label">Number of Students</label>

	                    <div class="col-md-6">
	                        <input id="student_number" type="number" class="form-control" name="student_number" required>

	                        @if ($errors->has('student_number'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('student_number') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>

	                <div class="form-group">
	                    <div class="col-md-8 col-md-offset-4">
	                        <button type="submit" class="btn btn-primary">
	                            Update Number of Students
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
