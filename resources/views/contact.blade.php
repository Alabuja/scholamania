@extends('layouts.app2')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Contact Us</h1>
        <p></p>
        <div class="page_nav"><span>You are here:</span> <a href="{{ url('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact Us</span></div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->
<section id="faq" class="padding">
	<!--Contact Deatils -->
<section id="contact" class="padding">
  	<div class="container">
    	<div class="row padding-bottom">
    		<div class="col-md-8 col-md-offset-2 text-center">
    			<h2 class="heading heading_space">Get in Touch <span class="divider-left"></span></h2>
          <h4 style="text-align: center;">To find out about activities of the Club, and exciting rewards, please get in touch with us, today!</h4>
          <br>
          <br>
    		</div>
      		<div class="col-md-4 contact_address heading_space wow fadeInLeft" data-wow-delay="1000ms">
        		{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p> --}}
        		<div class="address">
          			<i class="icon icon-map-pin border_radius"></i>
          			<h4>Visit Us</h4>
          			<p>Suite 38, Roseview Plaza, Arepo, Ogun State</p>
        		</div>
        	</div>
        	<div class="col-md-4 contact_address heading_space wow fadeInLeft" data-wow-delay="1000ms">
		        <div class="address">
		          	<i class="icon icon-mail border_radius"></i>
		          	<h4>Email Us</h4>
		          	<p><a href="mailto:iinfo@scholamania.org.ng">info@scholamania.org.ng</a></p>
		        </div>
		    </div>
		    <div class="col-md-4 contact_address heading_space wow fadeInLeft" data-wow-delay="1000ms">
		        <div class="address">
		          	<i class="icon icon-phone4 border_radius"></i>
		          	<h4>Call Us</h4>
		          	<p>(+234) 815 9599 845</p>
		        </div>
		    </div>
    	</div>
  	</div>
</section>
<!--Contact Deatils -->
</section>

@include('layouts.footer')
@endsection