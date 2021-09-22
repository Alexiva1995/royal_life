<nav class=" navbar1  mx-auto navbar navbar-expand-lg navbar-light bg-light" style="font-size: 18px; ">
    <a class="navbar-brand ml-2" href="#">
        <img src="{{ asset('assets/img/royal_green/logos/logo.svg') }}" class=" ml-5 margen-h"   >
     </a>
    <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=" navbar-toggler-icon"></span>
    </button>

    <div class=" collapse navbar-collapse" id="navbarSupportedContent">
        @if (Auth::user()->photoDB != NULL)
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link ml-3  mt-1 text-white side" href="{{route('inicio')}}">inicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link ml-3 mt-1 text-white side" href="{{route('shop.backofice')}}">tienda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ml-3 mt-1 text-white side" href="{{route('about')}}">nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ml-3 mt-1 text-white side" href="{{route('contact_us')}}">contacto</a>
          </li>

          @else

          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link ml-3 text-white side" href="{{route('inicio')}}">inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-3 text-white side" href="{{route('shop.backofice')}}">tienda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-3 text-white side" href="{{route('about')}}">nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ml-3 text-white side" href="{{route('contact_us')}}">contacto</a>
              </li>

          @endif

          <li class="nav-item">
            <a class="nav-link ml-3" href="#">

                @if (Auth::user()->photoDB != NULL)
                <span>
                    <img class="round " style="" src="{{asset('storage/photo/'.Auth::user()->photoDB)}}"
                        alt="{{ Auth::user()->fullname }}" height="50" width="50">
                </span>
                @else
                <span>

                </span>
                @endif


            </a>
          </li>
          @if (Auth::user()->photoDB != NULL)
        <li class="nav-item dropdown text-white" >
          <a class="mt-1 ml-3 nav-link dropdown-toggle text-white side"
          href="#" id="navbarDropdown"
          role="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">

           {{Auth::user()->fullname}}
          </a>
          <div class="ml-3 dropdown-menu" aria-labelledby="navbarDropdown" style="background: #11262C; top: 40px;">
            <a class="dropdown-item text-white side" href="{{ route('profile') }}">
                <i class="feather icon-user"></i>Editar Perfil</a>

            <a class="dropdown-item text-white side" href="{{ route('home') }}">
                <i class="feather icon-home "></i>Inversiones</a>

            <div class="dropdown-divider"  href="#"></div>

            <a class="dropdown-item text-white side" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="feather icon-log-out"></i>Logout</a>
          </div>
        </li>

        <li class="nav-item mt-1 mr-5" >
            <a class="ml-2 nav-link text-white " style="font-size: 25px; position: relative; top: -5px;"
            href="{{route('cart')}}">|<i class="side ml-1 feather icon-shopping-cart"></i></a>
          </li>

           @else
           <li class="ml-3 nav-item dropdown text-white">
            <a  class="  nav-link dropdown text-white side"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">

             {{Auth::user()->fullname}}
            </a>
            <div class=" dropdown-menu " aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-white side" href="{{ route('profile') }}">
                <i class="feather icon-user"></i>Editar Perfil</a>

              <a class="dropdown-item text-white side" href="{{ route('home') }}">
                <i class="feather icon-home"></i>Inversiones</a>

              <div class="dropdown-divider"  href="#"></div>

              <a class="dropdown-item text-white side" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="feather icon-log-out"></i>Logout</a>
            </div>
          </li>

          <li class="ml-5 nav-item">
              <a class="ml-2 nav-link text-white " style="font-size: 25px; position: relative; top: -5px;" href="{{route('cart')}}">|<i class="side ml-1 feather icon-shopping-cart"></i></a>
            </li>
            @endif
      </ul>

    </div>
  </nav>
