@extends('layouts.app')

@section('content')

<div class="container marketing">
  <div class="row">    
    
    <div class="col-lg-3"><!-- /.col-lg-3 -->
      @include("layouts.left-side-nav") 
    </div><!-- /.col-lg-3 -->           

  <div class="col-lg-8">
    <div class="card">
        <div class="card-body">
          <div class="row featurette">
            <div class="col-lg-6">
              <h1>{{$place->name}}</h1>
              <p>
                <a href="{{ route('city', $place->city->name) }}" class="badge badge-pill badge-secondary">{{$place->city->name}}</a>
              </p>
              <p>
                <a href="{{ route('country', $place->city->country->name) }}" class="badge badge-pill badge-secondary">{{$place->city->country->name}}</a>
              </p>
            </div>
            <div class="col-lg-6">
              <img class="featurette-image img-responsive-panel center-block" src="../../images/{{$place->picture}}" alt="{{$place->picture}}">
            </div>
          </div>
          <hr>
          <p>{{ $place->description}}</p>
        </div>
    </div>  <!-- end card -->
    @if (auth()->check())      
      <form method="POST" action="{{ $place->placepath().'/review_for_place' }}">
        {{ csrf_field() }}

        <div class="form-group">
          <textarea name="body" id="body" class="form-control" placeholder="Write Your Review..." rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Post</button><hr>
      </form>
    @else
      <p class="text-center">Please <a href="{{ route('login') }}">sign in</a> to leave a review</p>  
    @endif  
    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Reviews 
      <span class="badge badge-pill badge-secondary">{{$place->reviewForPlace->count()}}</span> 
    </button>
    <div id="demo" class="collapse">
      @foreach ($place->reviewForPlace as $placeReview)
        <div class="card">
          <div class="card-heading ">
            <a href=""> 
              {{$placeReview->owner->name}} 
            </a>
              write a review {{$placeReview->created_at->diffForHumans() }}
            </div>
          <div class="card-body">
            {{$placeReview->body}}
          </div>
        </div>
      @endforeach  
    </div><!-- end demo -->
  </div>  <!-- end col-lg-8 -->

</div></div>
@endsection
