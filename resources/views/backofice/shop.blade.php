@extends('backofice.layouts.dashboard')

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
@endpush

@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
@endpush



@include('backofice.ui.estylos')

@section('content')


        <div class="img-head">
            <div class="texto-tienda">
                <strong>Tienda</strong>
             </div>
             <div class="texto-tiendaB d-flex">
                <a class="ml-1 text-white" href="{{route('inicio')}}"><strong> Inicio </strong></a><strong class="ml-1"> > </strong><p style="color: #52CCA7" class="ml-1"><strong>Tienda</strong></p>
            </div>
            <img src="{{asset('assets/img/home/formas_fondo3.png')}}" alt=""  style="height: 200px;width: 100%;">

        </div>

<div class="container  ml-5">
<div class="ml-5  d-fex col-md-3" >
         @include('backofice.ui.cardcategorias') {{-- lista de categorias  --}}
         @include('backofice.ui.productos') {{--Modulo de categorias--}}
</div>
</div>




 @endsection

