@extends('backofice.layouts.dashboard')
@section('content')

@push('custom_css')
    <style>

.head{
    position: relative;
    top: 130px;
}
.top1{
    position: relative;
    top: 130px;
}
.top2{
    position: relative;
    top: 250px;
}

.left1{
    position: relative;
   left: -61px;


}

.font{
    font-size: 45px;
}
.zoom2:hover {
    -webkit-transform:scale(1.05);
    -moz-transform:scale(1.05);
    -ms-transform:scale(1.05);
    -o-transform:scale(1.05);
    transform:scale(1.05);

    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    -ms-transition:all 0.3s ease;
    width:100%;
    box-shadow: 0 9px 9px 0 rgba(0, 0, 0, 0.16), 0 9px 9px 0 rgba(0, 0, 0, 0.12) !important;
}
.zoom2:active {
    -webkit-transform:scale(1);
    -moz-transform:scale(1);
    -ms-transform:scale(1);
    -o-transform:scale(1);
    transform:scale(1);

    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    -ms-transition:all 0.3s ease;
    width:100%;
}
.zoom3:hover {
    -webkit-transform:scale(1.05);
    -moz-transform:scale(1.05);
    -ms-transform:scale(1.05);
    -o-transform:scale(1.05);
    transform:scale(1.05);

    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    -ms-transition:all 0.3s ease;
    width:100%;
    box-shadow: 0 9px 9px 0 rgba(0, 0, 0, 0.16), 0 9px 9px 0 rgba(0, 0, 0, 0.12) !important;
}
.zoom3:active {
    -webkit-transform:scale(1);
    -moz-transform:scale(1);
    -ms-transform:scale(1);
    -o-transform:scale(1);
    transform:scale(1);

    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    -ms-transition:all 0.3s ease;
    width:100%;
}
    .image{
        float: right;
        position: relative;
        left: 520px;
    }
    .image2{
        float: left;
    }

    </style>
@endpush
<div class="ml-1">
<div class="row fondo fondo2 w-100">

     <div class="container ">
        <div class="row top1">
          <div class="col-6 head ">
            <h1 class="fs-1  mt-5 font">Linea completa de<strong> Royal life </strong> </h1>

                <p class="text-dark mt-2 mb-3">Gracias a nuestro amplio portafolio de productos, podrás encontrar la combinación perfecta, para ello
                    nos hemos aliado con los mejores laboratorios en los Estados Unidos que gracias a sus investigaciones Hoy te entregamos la mejor
                    del mercado, productos excepcionales, los mejores procesos y la mas alta pureza.</p>

                <a href="{{route('shop.backofice')}}" class="btn btn-primario"><strong>ir a la tienda</strong></a>
          </div>
          <div class="col-6 ">
            <img src="{{asset('assets/img/home/Polygon5Forma.png')}}" class=" img-fluid img-responsive"  style="max-width: 100%">
          </div>

        </div>
      </div>
</div>

<div class="container w-100">
    <h1 class="text-center mt-5 mb-3" style="font-size: 35px;"> <strong> Categorias de nuestros productos </strong></h1>
    <div class="row mb-5">
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

  <div class="row mx-auto w-100" style="background:#F0FFFA;">
  <div class="container mx-auto" >
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
                <p class="card-text" style="color: #303030; width: 160px;font-size: 13px;">
                    {{ Str::words( strip_tags($producto->description) , 9 )}}</p>
                <a href="" class="btn btn-cre">
                    <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
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

  <div class="row fondo fondo4 ">

    <div class="container mx-auto">
       <div class="row ml-1">
         <div class="col-6 top2 frente" >
            <strong style="font-size: 35px">Royal life el equilibrio perfecto.</strong>

               <p class=" mt-2 mb-3 frente" > Cada proceso de nuestros productos son cuidadosamente vigilados por expertos,
                nuestros laboratorios aliados garantizan el CBD mas puro del mercado y nuestra
                linea de productos lo demuestra.</p>
         </div>
         <div class="col-6  left1 ">
           <img src="{{asset('assets/img/home/cbd1.png')}}" class=""  >
         </div>

       </div>
     </div>
</div>

</div>

@endsection
