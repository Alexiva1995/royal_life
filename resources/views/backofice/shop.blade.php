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

<div class="carousel-inner">
    <img class="d-block w-100" src="{{asset('assets/img/home/formas_fondo3.png')}}" style="background: #173138;">
    <div class="container carousel-caption d-flex justify-content-start" style="top:90px;left: 9%;">
        <div class="row">
            <div class="col-md-6">
                <div class="text-left">
                    <h3 class="text-white" style="font-size: 50px;"><strong> Tienda </strong></h3>
                </div>
                <div class="text-left d-flex ml-1">
                    <a class="text-white" href="{{route('inicio')}}"><strong> Inicio </strong></a><strong class="ml-1">
                        > </strong>
                    <p style="color: #52CCA7" class="ml-1"><strong> Tienda </strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container  ml-auto ">
<div class="  d-fex col-sm-3 mb-5" >
         @include('backofice.ui.cardcategorias') {{-- lista de categorias  --}}
         @include('backofice.ui.productos') {{--Modulo de categorias--}}

</div>
<div class="container mt-5 ">
    <div class="text-center link">
    {{$packages->links('pagination::bootstrap-4') }}
    </div>
</div>
</div>





 @endsection

