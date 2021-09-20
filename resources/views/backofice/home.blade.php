@extends('backofice.layouts.dashboard')
@include('backofice.ui.estylosHome')
@section('content')


<div class="Custom-font ">
<div class="row fondo fondo2 ">

     <div class="container ">
        <div class="row top1 wi ml-1 mr-1" >
          <div class="col-sm-6 head ">
            <h1 class="fs-1  mt-5 font estilo-x">Linea completa de<strong> Royal life </strong> </h1>

                <p class="text-dark mt-2 mb-3 font2">Gracias a nuestro amplio portafolio de productos, podrás encontrar la combinación perfecta, para ello
                    nos hemos aliado con los mejores laboratorios en los Estados Unidos que gracias a sus investigaciones Hoy te entregamos la mejor
                    del mercado, productos excepcionales, los mejores procesos y la mas alta pureza.</p>

                <a href="{{route('shop.backofice')}}" class="btn btn-prima"><strong>ir a la tienda</strong></a>
          </div>
          <div class="col-6 ">
            <img src="{{asset('assets/img/home/Polygon5Forma.png')}}" class=" img-fluid img-responsive"  style="max-width: 100%">
          </div>

        </div>
      </div>
</div>

<div class="container w-100">
    <h1 class="text-center mt-5 mb-3" style="font-size: 35px;"> <strong> Categorias de nuestros productos </strong></h1>
    <div class="row mb-5 ml-1 mr-1 ">
        @foreach ($categorias as $item )
      <div class="col-sm-3 mb-2 ">
        <div class="card mb-1 col-md-12 zoom2" style="height: 350px; background: white; width: 18rem;">
                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                <div class="text-center text-card"><strong>{{$item->categories_name}}</strong></div>
                <a  class="text-center"
                    style="color: #303030;"
                    href="{{ route('categorias.show', ['Categories' => $item->id ]) }}">
                    ver todos
                    los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""
                        style="margin-left: 10px;"></a>
            </div>
      </div>
      @endforeach
    </div>
  </div>


<div style=" background:#F0FFFA  ;">
  <div class="container " >
      <div class="ml-1 row mb-5 mt-5">
    <h1 class=" col-sm-4"><strong class="mb-5"  style="position: relative; top: 20px; font-size: 35px; color: #303030;">Los mas vendidos </strong></h1>
      </div>
    <div class="row ml-1 mr-1">

        @foreach ($productosMasVendidos as $producto )


      <div class="col-sm-4 ">

        <div class="card zoom3 shadow-sm " style="width: 18rem; background: white;">
            <div class=" row ">
            <div class="col-sm-4 ">

                <div style="background:#66FFCC; width: 100px; left: 15px; border-radius: 10px; position: relative;">
                    <a class="background "
                    href="{{action('TiendaController@detalleproducto', ['producto' => $producto->id ])}}">

        @if($producto->img == null)
                <img class="mt-2 mx-auto d-block  img-fluid"
                 src="{{asset('assets/img/home/producto21.png')}}"
                 alt="Product Image"
                 style=""
                >
         @else
               <img class=" mt-3 mx-auto  d-block  img-fluid  "
                    src="{{ asset('storage/photo-producto/'.$producto->img) }}"
                    alt="Product Image"
                    style="width: 10rem; ">
         @endif
                    </a>
                </div>
            </div>
            <div class="col-sm-8">
            <div class="card-body" >
                <h5><strong>{{$producto->name}}</strong></h5>
                <p class="blok card-text " style="color: #303030; ">
                    {{ Str::words( strip_tags($producto->description) , 9 )}}</p>
                    <a href="" class="btn btn-cre">
                        <p class="text-center" style="margin-top: -9px; margin-left: -38px; width: 100px;">{{ ucfirst($producto->getCategories->categories_name)}}</p>
                    </a>
                <p class=" blok text-right" style="color: #303030; font-size: 20px; float: right;">
                    <strong>${{$producto->price}}</strong></p>
            </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

  <div class="" style=" ">

    <div class="container ">
       <div class="row ml-1 mr-1">
         <div class="col-6 fondo4" >
            <strong class="" style="font-size: 45px ">Royal life el equilibrio perfecto.</strong>

               <p class=" mt-2 mb-3  " style=""> Cada proceso de nuestros productos son cuidadosamente vigilados por expertos,
                nuestros laboratorios aliados garantizan el CBD mas puro del mercado y nuestra
                linea <br> de productos lo demuestra.<br>Nuestra principal misión es mejorar tu calidad de vida, por eso queremos
                sorprenderte no una sola ves, si no todos los días!!"</p>
         </div>
         <div class="col-6 fondo3 " >
                <i class="">
                    ‎      ‏‏‎
                </i>
         </div>

       </div>
     </div>

</div>



<div class="container">
    <h1 class="text-center mt-5 mb-3" style="font-size: 35px;"> <strong> Productos </strong> </h1>
    <div class="row ml-1 mr-1">
        @foreach ($productos as $producto )
      <div class="col-sm-3">

        <div class="card zoom2" style="width: 18rem;  background:#FFFFFF;">
            <div class="card-body">

                <div class="text-center bg " style="">
                    <a  href="{{action('TiendaController@detalleproducto', ['producto' => $producto->id ])}}" method="GET">
                @csrf
                @if($producto->img == null)
                      <img class="mx-auto d-block  img-fluid "
                       src="{{asset('assets/img/home/producto21.png')}}"
                       alt="Product Image"
                      >
               @else
                     <img class="mx-auto d-block  img-fluid w-100"
                          src="{{ asset('storage/photo-producto/'.$producto->img) }}"
                          alt="Product Image"
                          style="height: 15.3rem;">
               @endif
                    </a>
            </div>
                <p class="text-right" style="color: rgb(0, 0, 0);">
                    <a class="btn-c text-center ">{{ ucfirst($producto->getCategories->categories_name)}}</a>

                    <strong class="texto mr-1 prize text-right">${{$producto->price}}</strong></p>

              <h5 class="card-title"><strong> {{$producto->name}} </strong> </h5>
              <p class="card-text text-dark mb-1">{{ Str::words( strip_tags($producto->description) , 10 )}}</p>

            </div>
          </div>

      </div>
      @endforeach
    </div>
  </div>


  <div class="container mb-5">
    <h1 class="text-center mt-5 mb-3" style="font-size: 35px;"> <strong> Clientes satisfechos  </strong> </h1>
    <div class="row ml-1 mr-1">

      <div class="col-sm-6  ">
        <div class="col-md-11 item bgcomen " style="">
            <div class="mt-1 ml-1 bg1 " style="top: -30px; position: relative;"> <img class="rounded-circle mr-1 ml-1 mt-1" src="{{asset('assets/img/home/Ellipse.png')}}"
                style="float: left">
            <h5 class="mt-1 text-dark"> <strong style="top: 20px; position: relative;"> Antonio Medina </strong></h5>
            <p class="mt-2"><strong class="text-dark ">Cliente</strong></p>
        </div>
            <div class="ml-1 mr-1">

                <div style="">
                    <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                    <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                    <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                    <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                    <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                </div>
                <div>
                    <p class=" text-dark mt-1 mb-1" >
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vel habitant elementum volutpat neque viverra. Risus felis
                        metus, enim amet suspendisse elit in. Egestas turpis vitae
                        et, et nibh porttitor. Accumsan eget.</p>
                </div>
            </div>

        </div>
      </div>

      <div class="col-sm-6  ">
        <div class="col-md-11 item bgcomen ">
            <div class="author ml-1 bg1" style="top: -30px; position: relative;"><img class="rounded-circle mr-1 ml-1 mt-1" src="{{asset('assets/img/home/Ellipse1.png')}}"
                style=" float: left;">
                <h5 class="mt-1 text-dark"> <strong style="top: 20px; position: relative;">Felipe Minaya </strong> </h5>
            <p class="mt-2"><strong class="text-dark">Cliente</strong></p>
        </div>
            <div class="ml-1 mr-1">
                <div style="margin-top: 8px;">
                    <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                    <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                    <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                    <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                    <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                </div>
                <div>
                    <p class=" text-dark  mt-1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vel habitant elementum volutpat neque viverra. Risus felis
                        metus, enim amet suspendisse elit in. Egestas turpis vitae
                        et, et nibh porttitor. Accumsan eget.</p>
                </div>
            </div>

        </div>
      </div>

      <div class="container">
        <div class="row d-flex justify-content-center">
            <img src="{{asset('assets/img/home/Rectangle29.png')}}" alt="" style="margin-top: -255px; width: 70%;">
        </div>
    </div>

    </div>
  </div>

  <div class="container">
    <div class="row " >

        <div class=" col-12 for bg3 mb-5 sombra1" style="">
            <h1 class="ml-2 mr-2  text-center mt-2 " style="">
                <strong class="text-white text-center " style="font-size: 35px;">El CBD se encuentra en todos los tipos de cannabis sativa, pero el Cañamo es el que tiene las concentraciones mas altas.</strong>
            </h1>
            <p class="text-white text-center ml-2 mr-2 " style="">
                La relación entre la Humanidad y el cannabis comenzó hace miles de años. Esta larga historia nació en el Neolítico, cuando
                los humanos empezaron a practicar la agricultura y asentarse en poblados donde cultivaban esta planta por sus propiedades
                terapéuticas. Siendo originario de Asia central, el cannabis fue expandiéndose, primero, hacia China, donde la evidencia
                arqueológica muestra la quema de cogollos hace 2.500 años; para después viajar hacia Europa, hoy en dia se sigue cultivando
                esta planta de forma selectiva con propiedad comerciales, convirtiéndose en una fuente natural y rica en CBD.
                como Lo dijimos anteriormente, el CBD es parte de una amplia familia de cannabionoides. Aunque la mayoría de estos compuestos
                (incluyendo el CBD) no son psicoactivos, todas las familias tienen un miembro no deseado.
                La familia de los cannabinoides también incluye el THC, el compuesto ilegal que está presente en las plantaciones de marihuana.
            </p>
             <div class="text-center mb-2">
                 <a href="{{route('contact_us')}}" class="btn btn-prim text-center" style=""><strong class="text-center">Contáctanos</strong></a>
             </div>
            </div>



    </div>
  </div>


</div>
@endsection
