@extends('backofice.layouts.dashboard')
@include('backofice.ui.estylosHome')
@section('content')


<div class="mx-auto" >
<div class="row fondo fondo2 ">

     <div class="container ">
        <div class="row top1 ml-1">
          <div class="col-6 head ">
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
    <div class="row mb-5 ml-1">
        @foreach ($categorias as $item )
      <div class="col-4 mb-2">
        <div class="card mb-1 col-md-11 ml-md-1 zoom2" style="height: 350px;background: white;">
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

  <div class="row   fondo1 " >
    <div class=" mx-auto ">
  <div class="container ml-5" >
      <h1 class=" mt-5 mb-2 "><strong style="font-size: 35px; color: #303030;">Los mas vendidos </strong></h1>
    <div class="row mb-5 " >
        @foreach ($productos as $producto )


      <div class="col-4 col-xs">
        <div class="card-body col-md-12 mb-2  zoom3 shadow-sm "
        style="background: white;border-radius: 10px;padding: 0.8rem;max-width: 95%;">
        <div class="d-flex ">
            <div style="background:#66FFCC;border-radius: 10px;width: 100px;">
                <a class="background "
                href="{{action('TiendaController@detalleproducto', ['producto' => $producto->id ])}}">
               @if($producto->img == null)
                            <img class="mx-auto d-block  img-fluid"
                             src="{{asset('assets/img/home/producto21.png')}}"
                             alt="Product Image"
                            >
                     @else
                           <img class="mt-2 mx-auto d-block  img-fluid w-100 mt-3"
                                src="{{ asset('storage/photo-producto/'.$producto->img) }}"
                                alt="Product Image"
                                style=" ">
                     @endif
       </a>
            </div>
            <div class="col-md-7 ">
                <h5><strong>{{$producto->name}}</strong></h5>
                <p class="card-text " style="color: #303030; ">
                    {{ Str::words( strip_tags($producto->description) , 9 )}}</p>
                <a href="" class="btn btn-cre">
                    <p style="margin-top: -9px; margin-left: -20px;">{{ ucfirst($producto->getCategories->categories_name)}}</p>
                </a>
                <p style="color: #303030;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                    <strong>${{$producto->price}}</strong></p>
            </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
    </div>
  </div>

  <div class="row fondo fondo4 ">

    <div class="container ">
       <div class="row ml-2">
         <div class="col-6 top2  frente" >
            <strong class="frente" style="font-size: 45px ">Royal life el equilibrio perfecto.</strong>

               <p class=" mt-2 mb-3 frente font2 frente" > Cada proceso de nuestros productos son cuidadosamente vigilados por expertos,
                nuestros laboratorios aliados garantizan el CBD mas puro del mercado y nuestra
                linea <br> de productos lo demuestra.<br>Nuestra principal misión es mejorar tu calidad de vida, por eso queremos
                sorprenderte no una sola ves, si no todos los días!!"</p>
         </div>
         <div class="col-6  left1 ">
           <img src="{{asset('assets/img/home/cbd1.png')}}" class=""  >
         </div>

       </div>
     </div>
</div>



<div class="container">
    <h1 class="text-center mt-5 mb-3" style="font-size: 35px;"> <strong> Productos </strong> </h1>
    <div class="row ml-1">
        @foreach ($productos as $producto )
      <div class="col-4 ">

        <div class="card zoom2" style="width: 23rem;  background:#FFFFFF;">
            <div class="card-body">

                <div class="text-center bg " style="">
                    <a  href="{{action('TiendaController@detalleproducto', ['producto' => $producto->id ])}}" method="GET">
                @csrf
                @if($producto->img == null)
                      <img class="mx-auto d-block  img-fluid"
                       src="{{asset('assets/img/home/producto21.png')}}"
                       alt="Product Image"
                      >
               @else
                     <img class="mx-auto d-block  img-fluid w-100"
                          src="{{ asset('storage/photo-producto/'.$producto->img) }}"
                          alt="Product Image"
                          style="">
               @endif
                    </a>
            </div>
                <p class="text-right" style="color: rgb(0, 0, 0);">
                    <a class="btn-c text-center ">{{ ucfirst($producto->getCategories->categories_name)}}</a>

                    <strong class="texto mr-1 prize text-right">${{$producto->price}}</strong></p>

              <h5 class="card-title"><strong> {{$producto->name}} </strong> </h5>
              <p class="card-text text-dark mb-1">{{ Str::words( strip_tags($producto->description) , 25 )}}</p>

            </div>
          </div>

      </div>
      @endforeach
    </div>
  </div>


  <div class="container">
    <h1 class="text-center mt-5 mb-3" style="font-size: 35px;"> <strong> Clientes satisfechos  </strong> </h1>
    <div class="row ml-1 ">
        <i class="forma">
i
        </i>
      <div class="col-6 bg2">
        <div class="col-md-11 item bgcomen" style="">
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

      <div class="col-6 bg2">
        <div class="col-md-11 item bgcomen ml-2" >
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

    </div>
  </div>

  <div class="container">
    <div class="row" >

        <div class=" col-12 for bg3 mb-5" style="">
            <h1 class="ml-2 mr-2  text-center mt-5 " style="">
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
             <div class="text-center mb-1">
                 <a href="{{route('contact_us')}}" class="btn btn-prim text-center" style=""><strong class="text-center">Contáctanos</strong></a>
             </div>
            </div>



    </div>
  </div>


</div>
@endsection
