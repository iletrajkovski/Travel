@extends('layouts.app')

@section('content')

<div class="container marketing">
  <div class="row">    
    
    <div class="col-lg-3"><!-- /.col-lg-3 -->
      @include("layouts.left-side-nav") 
    </div><!-- /.col-lg-3 -->      

  <div class="col-lg-8">
    <div class="card ">
      <h1 class="card-heading text-center font-weight-bold">All Places To See</h1>  
    </div>
    <div class="card ">
      <div class="card-body">         
      <div class="row featurette">      
        @foreach ($places as $place)
          <div class="col-sm-6 col-lg-4 border">      
            <div class="thumbnail">
              <a href="{{ route('place', $place) }}"><img  class="featurette-image img-responsive-panel center-block" src="/images/{{$place->picture}}" alt="{{$place->picture}}"></a>
              <div class="caption">
              <a href="{{ route('place', $place) }}">  
                <p>{{$place->name}}</p>
              </a>
              <a href="{{ route('city', $place->city->name) }}" class="badge badge-pill badge-secondary">{{$place->city->name}}</a><br>
              <a href="{{ route('place', $place) }}" class="badge badge-pill badge-secondary">{{$place->reviewForPlace->count()}} Reviews</a>
              </div>
            </div>
          </div>
        @endforeach  
      </div>
      </div>          
    </div>
    {{ $places->links() }} 
  </div>
</div>
</div>

@endsection
