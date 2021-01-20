@extends('layouts.app')

@section('content')

  @include ('layouts.top-country-carousel') <!-- Carousel --> 
 <div class="container marketing">
  <div class="row">
  
    <div class="col-lg-3"><!-- /.col-lg-3 -->
      @include("layouts.left-side-nav") 
    </div><!-- /.col-lg-3 -->

     <div class="col-lg-6"><!-- /.col-lg-6 -->
        <div class="card">
            <div class="card-heading text-center font-weight-bold">
                Latest City Guides
            </div>
        </div>    
        @foreach ($cities->take(10) as $city)
        <div class="card">
            <div class="card-body">
              <div class="row featurette">
                <div class="col-lg-6">
                  <h1><a href="{{ route('city', $city) }}">{{$city->name}}</a></h1>
                  <a href="{{ route('country', $city->country->name) }}" class="badge badge-pill badge-secondary">{{$city->country->name}}</a><hr>
                  <p> {{ $city->short_description }}<a href="{{ route('city', $city) }}" >View more</a></p>
                </div>
                <div class="col-lg-6">
                    <a href="{{ route('city', $city) }}">
                        <img class="featurette-image img-responsive-panel center-block" src="images/{{$city->picture}}" alt="{{$city->picture}}" >
                    </a>
                </div>
              </div>
            </div>
        </div>
        @endforeach    
    </div><!-- /.col-lg-6 -->

    <div class="col-lg-3">
        @include('layouts.right-side-city-carousel')
    </div>
  </div>
 </div>
@endsection
