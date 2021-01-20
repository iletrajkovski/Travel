<div class="card ">
  <div class="card-heading text-center font-weight-bold">
    Navigation
  </div>
</div>
  <div class="card ">
  <div class="card-body">
    @foreach ($countries as $country)   
    <ul class="dropdown-header  d-none d-md-block sidebar" >
      <li class="dropdown-submenu btn btn-light">
        <h4>
          <a href="{{ route('country', $country) }}" >
            {{$country->name}} <span class="badge badge-pill badge-secondary">{{$country->cities->count()}}</span>
          </a>
        </h4> 
        <ul class="dropdown-menu ">
          <li class="dropdown-header font-weight-bold"><h4 class="font-weight-bold">All Cities For Country</h4></li>
          @foreach ($country->cities as $city)
            <li class="dropdown-submenu dropdown-header">
              <h4>
                <a  href="{{ route('city', $city) }}">
                  {{$city->name}} <span class="badge badge-pill badge-secondary">{{$city->places->count()}}</span>
                </a> 
              </h4> 
              <ul class="dropdown-menu">
                <li class="dropdown-header font-weight-bold">
                  <h4 class="font-weight-bold">All Places For City</h4>
                </li>
                @foreach ($city->places as $place)
                <li class="dropdown-header">
                 <h4> <a href="{{ route('place', $place) }}">{{$place->name}}</a></h4> 
                </li>
                @endforeach
              </ul>
            </li>
          @endforeach
        </ul>
      </li><!--end submenu-->          
    </ul>
    @endforeach
  </div>  
</div>

     <!--   <form class="navbar-form" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
<!--nav navbar-nav-->
      

