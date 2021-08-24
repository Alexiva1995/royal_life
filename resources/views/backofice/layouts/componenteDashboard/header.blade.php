<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-dark navbar-shadow text-white">
        <img src="{{ asset('assets/img/royal_green/logos/logo.svg') }}" class="ml-5 pl-5" alt="">

        <div class="collapse navbar-collapse justify-content-end" id="">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link ml-3 h5" href="{{route('inicio')}}" style="color: #5ce5ba;">inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-3 h5" href="{{route('shop.backofice')}}">Tienda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  ml-3 h5" href="{{route('about')}}">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-3 h5" href="{{route('contact_us')}}">Contacto</a>
              </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end mr-5 pr-5">
            <img src="{{asset('assets/img/iconnew/Vector.png')}}" alt="">
            <a class="text-white ml-1" style="font-size: 19px;" href="{{route('login')}}">Ingresar</a>
            <a class="text-white pl-1 pr-1"style="font-size: 25px;" href="">|</a>
      <img src="{{asset('assets/img/iconnew/Group.png')}}" alt="">
    </div>

</nav>
<!-- END: Header-->
