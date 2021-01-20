<div class="card ">
    <div class="card-heading text-center font-weight-bold">
        Popular City Destination
    </div>
</div>
<div class="card ">
    <div class="card-body">   
        
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach( $cities->take(5) as $city )
                    <li data-target="#carouselExampleCaptions" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach( $cities->take(5) as $city )
                <div class="carousel-item {{ $loop->first ? ' active' : '' }}" >
                  <img class="first-slide d-block w-100" src="/images/{{$city->picture}}" alt="{{$city->picture}}">

                    <div class="carousel-caption d-none d-md-block">
                        <a href="{{ route('city', $city) }}">
                            <h2>{{$city->name}}</h2>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Controls -->
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>                
    </div>
</div>
