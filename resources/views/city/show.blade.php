@extends('layouts.app')

@section('content')

<div class="container marketing">
  <div class="row">    
    
    <div class="col-lg-3"><!-- /.col-lg-3 -->
      @include("layouts.left-side-nav") 
    </div><!-- /.col-lg-3 -->            

  <div class="col-lg-8">
    <div class="card ">
      <div class="card-body">
        <div class="row featurette">
          <div class="col-lg-6">
            <h1>{{$city->name}}</h1>
            <a href="{{ route('country', $city->country->name) }}" class="badge badge-pill badge-secondary">{{$city->country->name}}</a><hr>
            <p>{{ $city->description}}</p>
          </div>
          <div class="col-lg-6">
            <img class="featurette-image img-responsive-panel center-block" src="../../images/{{$city->picture}}" alt="{{$city->picture}}">
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="card ">
        <h2 class="card-heading text-center font-weight-bold">What to see in {{$city->name}}</h2>
    </div>
    <div class="card ">    
        <div class="card-body">
          <div class="row featurette">
          @foreach ($city->places as $place)
            <div class="col-sm-6 col-lg-4">      
              <div class="thumbnail">
                <a href="{{ route('place', $place) }}"><img class="featurette-image img-responsive-panel center-block" src="/images/{{$place->picture}}" alt="{{$place->picture}}"></a>
                <div class="caption">
                  <a href="{{ route('place', $place) }}">  
                    <h4>{{$place->name}}</h4>
                  </a>
                <a href="{{ route('place', $place) }}" class="badge badge-pill badge-secondary">{{$place->reviewForPlace->count()}} Reviews</a>
                </div>
              </div>
            </div>
          @endforeach  
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
