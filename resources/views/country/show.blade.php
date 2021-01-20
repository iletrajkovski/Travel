@extends('layouts.app')

@section('content')
<div class="container marketing">
  <div class="row">    
    
    <div class="col-lg-3"><!-- /.col-lg-3 -->
      @include("layouts.left-side-nav") 
    </div><!-- /.col-lg-3 -->            

    <div class="col-lg-8"><!-- col-lg-8 -->
        <div class="country-image">
            <img src="/images/{{$country->picture}}" alt="{{$country->picture}}" width="100%" height="200">
            <div class="centered">
                <h1>
                    {{$country->name}}
                </h1>
                <p>{{$country->description}}</p>
            </div>
        </div>
        <hr>
        @foreach ($country->cities as $city)
        <div class="card card-default">
            <div class="card-body">
              <div class="row featurette">
                <div class="col-lg-6">
                  <h1><a href="{{ route('city', $city) }}">{{$city->name}}</a></h1>
                  <p class="badge badge-pill badge-secondary">{{$city->country->name}}</p><hr>
                  <p>{{ $city->short_description }}<a href="{{ route('city', $city) }}" >View more</a></p>
                </div>
                <div class="col-lg-6">
                    <a href="{{ route('city', $city) }}">
                        <img class="featurette-image img-responsive-panel center-block" src="/images/{{$city->picture}}" alt="Generic placeholder image">
                    </a>
                </div>
              </div>
            </div>
        </div>
        @endforeach    
    </div><!-- end col-lg-8 -->

</div>
</div>   


@endsection
