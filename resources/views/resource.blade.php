@extends('layouts.app2')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>RESOURCES</h1>
        <p></p>
        <div class="page_nav"><span>You are here:</span> <a href="{{ url('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Resources</span></div>
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
	                <div class="panel-heading">RESOURCES</div>                
	            </div>
	            
	            	<p>All the resources you need for the SRWC Club in your school to function. It includes fun activities, ice-breakers, exercises, study guides, and reading material for the club.</p>
	            
	            <br><br>
							
	            <table id="example2" class="table table-bordered table-striped">
	                <thead>
	                    <tr>
	                        <th>Title</th>
	                        <th>Action</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach($viewresources as $getresources)
	                        <tr>
	                            <td>{{$getresources->name}}</td>
	                            <td><a href="{{$getresources->resource_url}}" download="{{$getresources->resource_url}}">
									<button class="btn btn-primary" type="button">
										<i class="glyphicon glyphicon-download">Download</i>
									</button></a>
								</td>
	                        </tr>
	                    @endforeach
	                </tbody>   
	                            
	            </table>
	            {{ $viewresources->links() }}
	                
	        </div>
	    </div>
	</div>
</section>
@include('layouts.footer')
@endsection
