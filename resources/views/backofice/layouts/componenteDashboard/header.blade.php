
<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-dark navbar-shadow text-white">
        <img src="{{ asset('assets/img/royal_green/logos/logo.svg') }}" class="pl-5 margen-h" alt="">

        <div class="collapse navbar-collapse justify-content-end" id="">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link ml-3 h5" href="{{route('inicio')}}" style="font-size: 18px; color: #5ce5ba;">inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link ml-3 h5" href="{{route('shop.backofice')}}" style="font-size: 18px;">Tienda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  ml-3 h5" href="{{route('about')}}" style="font-size: 18px;">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ml-3 h5" href="{{route('contact_us')}}" style="font-size: 18px;">Contacto</a>
              </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end  pr-5" style="margin-right: 130px;">
            <img src="{{asset('assets/img/iconnew/Vector.png')}}" alt="">
            <a class="text-white ml-1" style="font-size: 18px;" href="{{route('login')}}">Ingresar</a>
            <a class="text-white pl-1 pr-1"style="font-size: 25px;" href="">|</a>
            <a href="{{route('cart')}}"><img src="{{asset('assets/img/iconnew/Group.png')}}" alt=""></a>
    </div>

</nav>
<!-- END: Header-->
