@extends('guest.layouts.app')

@section('content')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>HOME</h1>
        <p></p>
        <div class="page_nav"><span>You are here:</span> <a href="{{ url('/')}}">Home</a></div>
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
                    <div class="panel-heading"><strong>WELCOME, {{Auth::guard('individual')->user()->name}}</strong></div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <p>This is your official SRWC Homepage and lists your achievements and details your progress as a club</p>
            </div>
        {{-- @if($data)  --}}       
            <div class="col-md-8 col-md-offset-2 home">
                <div class="col-md-6">
                    <p style="text-transform: uppercase;"><strong>{{Auth::guard('individual')->user()->username}}</strong></p>
                    {{-- <p>{{Auth::guard('individual')->user()->username}}</p> --}}
                    {{-- <p>Number of Champs: {{Auth::User()->student_number}}</p> --}}
                    {{-- <p>Coach(es): </p> --}}
                    
                    {{-- @foreach(Auth::user()->coach as $coaches)
                        <hr/>
                        <span style="text-transform: capitalize;">{{$coaches->coach_name}}</span>
                       
                        
                    @endforeach --}}
                
                </div>
            
                <div class="col-md-6">
                  @if($topUserScores)
                    <h3>Top 3 schools</h3>
                    <p></p>
                    @foreach($topUserScores as $topUserScore)

                         <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{ $topUserScore->score_number or ''}}%">
                                {{ $topUserScore->score_number or ''}}%  {{$topUserScore->name or ''}}
                            </div>
                        </div>
                        <br/>
                    @endforeach
                    @endif
                    <hr>
                    <h3>My Score</h3>
                    <hr>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{$currentUserScore }}%">
                            {{$currentUserScore}}%
                        </div>
                    </div>
                </div>
                
            </div>
        {{-- @endif --}}
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection
