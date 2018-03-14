@extends('layouts.app2')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>FAQ's</h1>
        <p></p>
        <div class="page_nav"><span>You are here:</span> <a href="{{ url('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>FAQ's</span></div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->
<section id="faq" class="padding">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
        		<h2 class="heading heading_space wow fadeInDown">Frequently Asked Questions<span class="divider-left"></span></h2>   
         		<div class="faq_content wow fadeIn" data-wow-delay="400ms">
              		<ul class="items">
		                <li><a href="#." >What is it about?</a>
		                	<ul class="sub-items">
			                    <li>
			                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
			                      ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			                    </li>
		                    </ul>
		                </li>
		                <li><a href="#.">Who can Join?</a>
		                	<ul class="sub-items">
		                    	<li><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
			                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			                    </li>
		                    </ul>
		                </li>
		                <li><a href="#.">Age Limit</a>
		                	<ul class="sub-items">
		                    	<li>
		                    		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
		                      		ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		                    	</li>
		                  	</ul>
		                </li>
		                <li><a href="#.">Finish</a>
		                	<ul class="sub-items">
			                    <li>
			                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
			                      ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			                    </li>
		                    </ul>
		                </li>
                    </ul>
        		</div>
      		</div>
    	</div>
  	</div>
</section>
@include('layouts.footer')

@endsection