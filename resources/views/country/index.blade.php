@extends('layouts.app')

@section('content')
<div class="container marketing">
  <div class="row">    
    
    <div class="col-lg-3"><!-- /.col-lg-3 -->
      @include("layouts.left-side-nav") 
    </div><!-- /.col-lg-3 -->      

  <div class="col-lg-8">
      <div class="card">
          <div class="card-heading text-center font-weight-bold">
            All Countries
          </div>
      </div>    
      @foreach ($countries as $country)
      <div class="card">
          <div class="card-body">
            <div class="row featurette">
              <div class="col-lg-6">
                <h1>
                  <a class="1" id="1" dusk="1" href="{{ route('country', $country) }}"> {{$country->name}} </a>
                </h1>
                <hr>
                <p>
                  {{ $country->short_description }}
                  <a href="{{ route('country', $country) }}" > View more </a>
                </p>
              </div>
              <div class="col-lg-6">
                <a href="{{ route('country', $country) }}">
                  <img class="featurette-image img-responsive-panel center-block" src="/images/{{$country->picture}}" alt="{{$country->picture}}">
                </a>  
              </div>
            </div>
          </div>
      </div>
      @endforeach  
      {{ $countries->links() }}    
  </div><!-- end col-lg-8 -->
 </div>
</div>
@endsection
