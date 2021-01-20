  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach( $countries as $country )
          <li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
        @endforeach
      </ol>

      <div class="carousel-inner">
        @foreach( $countries as $country )
        <div class="carousel-item  {{ $loop->first ? ' active' : '' }}">
          <img class="second-slide" src="/images/{{$country->picture}}" alt="{{$country->picture}}">
          <div class="container">
            <div class="carousel-caption text-left">
              <a href="{{ route('country', $country) }}">
                <h1 class="text-center font-weight-bold">{{$country->name}}</h1>
                <p class="text-center font-weight-bold">{{$country->description}}</p>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>