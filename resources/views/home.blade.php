@extends('layouts.app2')

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
                    <div class="panel-heading"><strong>WELCOME, {{Auth::User()->name}}</strong></div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <p>This is your official SRWC Homepage and lists your achievements and details your progress as a club</p>
            </div>
        {{-- @if($data)  --}}       
            <div class="col-md-8 col-md-offset-2 home">
                <div class="col-md-6">
                    <p style="text-transform: uppercase;"><strong>{{Auth::User()->name}}</strong></p>
                    <p>{{Auth::User()->address}}</p>
                    <p>Number of Champs: {{Auth::User()->student_number}}</p>
                    <p>Coach(es): </p>
                    
                    @foreach(Auth::user()->coach as $coaches)
                        <hr/>
                        <span style="text-transform: capitalize;">{{$coaches->coach_name}}</span>
                        {{-- <a href="/coach/{{$coaches->id}}">Edit</a> --}}
                        
                    @endforeach
                
                </div>
            
                <div class="col-md-6">
                    @if($topScores)
                    <h3>Top 3 schools</h3>
                    <p></p>
                    @foreach($topScores as $topScore)

                         <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{ $topScore->score_number or ''}}%">
                                {{ $topScore->score_number or ''}}%  {{$topScore->name or ''}}
                            </div>
                        </div>
                        {{-- {{ $topScore->score_number}} - {{$topScore->name}} --}}
                        <br/>
                        {{-- @if($userscores != $scoreusers)
                        {{round($scoreusers->scoreCount, 2)}}%
                        @endif
                        
                        <br> --}}
                    @endforeach
                    @endif
                    <hr>
                    <h3>My Score</h3>
                    <hr>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{$currentLoggedIn }}%">
                            {{$currentLoggedIn}}%
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
