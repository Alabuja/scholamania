@extends('layouts.app')

@section('content')
    @include('layouts.slider')
    <!--Fun Facts-->
    <section id="facts" class="padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center wow fadeInDown">
           <h2 class="heading">Reading Facts<span class="divider-center"></span></h2>
           <p class="heading_space margin10"></p>
          </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <ul>
            <li>
              <p>Reading is the most important subject in school. Why? Because a child needs reading in order yo master most of the other subjects. </p>
            </li>
            <li>
              <p>Across the world, children who read the most, read the best. </p>
            </li>
            <li>
              <p>Reading for just six minutes a day can reduce stress by 68%.</p>
            </li>
          </ul>
        </div>
      </div>
    </section>
    @include('layouts.footer')

@endsection