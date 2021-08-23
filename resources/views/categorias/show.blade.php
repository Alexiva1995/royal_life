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
<div class="" style="background: #173138">
    <div class="texto-tienda">
        <strong>Categorias</strong>
     </div>
     <div class="texto-tiendaB">
       <p>Tienda <strong> > </strong></p>
     </div>
    <img src="{{asset('assets/img/home/formas_fondo3.png')}}" alt=""  style="width: 100%; ">

</div>


<div class="container">
    <h2 class="titulo-categoria text-uppercase mt-5 mb-4">

    </h2>
    <div class="row">

        @include('backofice.ui.cardcategorias')

        @include('backofice.ui.productos')
       </div>


    </div>


@endsection
