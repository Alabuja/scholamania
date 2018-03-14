@extends('layouts.app2')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Edit Single Coach</h1>
        <p></p>
        <div class="page_nav"><span>You are here:</span> <a href="{{ url('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Edit Coach</span></div>
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
	                <div class="panel-heading">Edit Coach</div>
	            </div>

	            <form class="form-horizontal" role="form" method="POST" action="{{ url('coach/' . $coach->id) }}">
	                {{ csrf_field() }}

	                <div class="form-group{{ $errors->has('coach_name') ? ' has-error' : '' }} required">
	                    <label for="coach_name" class="col-md-4 control-label">Edit Coach</label>

	                    <div class="col-md-6">
	                        <input id="coach_name" type="text" class="form-control" name="coach_name" value="{!! $coach->coach_name !!}">

	                        @if ($errors->has('coach_name'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('coach_name') }}</strong>
	                            </span>
	                        @endif
	                   </div>
	                </div>

	                <div class="form-group">
	                    <div class="col-md-8 col-md-offset-4">
	                        <button type="submit" class="btn btn-primary">
	                            Update Coach
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
