@extends('backofice.layouts.dashboard')

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
@endpush

@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
@endpush

@section('content')
<body class="ml-auto">
@include('backofice.ui.estylos')
@include('backofice.ui.script')


<div class="carousel-inner">
    <img class="d-block w-100" src="{{asset('assets/img/home/formas_fondo3.png')}}" style="background: #173138;">
    <div class="container carousel-caption d-flex justify-content-start" style="top:90px;left: 9%;">
        <div class="row">
            <div class="col-md-6">
                <div class="text-left">
                    <h3 class="text-white" style="font-size: 50px;"><strong> Producto </strong></h3>
                </div>
                <div class="text-left d-flex ml-1">
                    <a class="text-white" href="{{route('inicio')}}"><strong> Inicio </strong></a><strong class="ml-1">
                        > </strong>
                    <p style="color: #52CCA7" class="ml-1"><strong> Producto </strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fuente">
<div class="container-fluid    mt-5">
    <div class="row mr-5 ml-5 mb-3">
      <div class="col-sm-4">
            <div class="fondoProducto  shadow text-center " style="">
                @if($producto->img == null)
                <img class="o"
                 src="{{asset('assets/img/home/producto21.png')}}"
                 alt="Product Image">
         @else
               <img class="rounded-circle  text-center w-75 o "
                    src="{{ asset('storage/photo-producto/'.$producto->img) }}"
                    alt="Product Image"
                    style="">
         @endif
            </div>
        </div>

      <div class="col-sm-5">
        <form action="{{route('cart.post')}}" method="POST">
            @csrf
            <input type="hidden" name="package_id" value="{{$producto->id}}">
            <input type="hidden" name="categories_id" value="{{$producto->categories_id}}">
            <input type="hidden" name="monto" value="{{$producto->price}}">

        <div class="card" style=" background:#FFFFFF;">
            <div class="ml-3 card-body">
              <h5 class="card-title"><strong>{{$producto->name}}</strong></h5>

                <h4>Price:</h4>
                <p class="text-dark ">  <strong> ${{$producto->price}} </strong> </p>
                <h4>Quantity:</h4>

                    <button class=" Rangoprecio shadow zoomj custominput text-white"  onclick="handleClickResta()" type="button"><i class="fa fa-minus"></i></button>
                    <input class="sinborde shadow  text-center text-dark" type="number" id="cantidad" name="cantidad" value="1" min="1" required>
                    <button class="Rangoprecio shadow zoomj custominput text-white" onclick="handleClickSuma()"  type="button"><i class="fa fa-plus"></i></button>


                    <div class="action">
                        <button class="btn text-dark btn-custom mt-2  mb-2 zoom5" type="submit">
                        <i class="fa fa-shopping-cart text-dark zoom5"></i><strong> Comprar </strong></button>
                    </div>
            </div>
          </div>
        </form>
      </div>

      <div class="col-sm-3">
        <div class="card " style=" background:#FFFFFF;">
            <div class=" ml-1 mr-1 card-body">
                <h6> <strong class="fuente"> Categorias </strong></h6>
                <hr class="hr">
                @foreach ( $categorias as $categories )
                <div class="form-check col-12 ">
                    <input class="form-check-input" type="checkbox" value="{{$categories->id}}"id="flexCheckDefault">
                    <label class="form-check-label mb-2"for="flexCheckDefault" style="">
                        <a class="s " href="{{ route('categorias.show', ['Categories' => $categories->id ]) }}">
                    <strong>  {{ ucfirst($categories->categories_name) }}</strong>
                        </a>
                    </label>
                </div>
                @endforeach
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="container-fluid ">
    <div class="row mr-5 ml-5">
      <div class="col-sm-12">
         <div class="row">
              <div class="col-sm-12 ">
                <div class=" card "  style="background:#FFFFFF;   width: 18rem;">
                    <div class="card-body text-dark">
                        <h1 class=" mt-2 mb-2"><strong class=""> Descripcion del producto </strong></h1>
                        <p class="text-dark mb-2 " > {!! $producto->description !!} </p>
                    </div>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>


  <div class="container-fluid ">
    <h1 class="ml-5 mt-2 mb-3"><strong class="ml-3"> Productos Relacionados </strong></h1>
    <div class="ml-5 mr-5 row">
        @include('backofice.ui.relacionados')
    </div>
  </div>
</div>
  @endsection
