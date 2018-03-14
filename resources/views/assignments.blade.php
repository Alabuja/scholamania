@extends('layouts.app2')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>CLUB ACTIVITIES</h1>
        <p></p>
        <div class="page_nav"><span>You are here:</span> <a href="{{ url('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Club Activities</span></div>
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
                <div class="panel-heading">Upload Club Activities</div>
            </div>

                
            <form class="form-horizontal" role="form" method="POST" action="{{ url('assignment') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }} required">
                    <label for="assignment_submitted" class="col-md-4 control-label">Upload Club Activities</label>

                    <div class="col-md-6">
                        <input id="assignment_submitted" type="file" class="form-control" name="assignment_submitted" required>

                        @if ($errors->has('assignment_submitted'))
                            <span class="help-block">
                                <strong>{{ $errors->first('assignment_submitted') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Update Club Activities
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
