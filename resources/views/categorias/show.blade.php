@extends('backofice.layouts.dashboard')

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
@endpush

@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
@endpush


@push('custom_css')
<style>
.zoom:hover {
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
}

.bdr
{
    border-radius: 6px;overflow:hidden;

}
.bar {
    position: relative;
    top: 15px;
	height:200px;
}

</style>
@endpush

@section('content')
<div class="" style="background: #173138">
    <div class="texto-tienda">
        <strong>Categorias</strong>
     </div>
     <div class="texto-tiendaB">
       <p>Tienda <strong> > </strong>{{$categoria->name}}</p>
     </div>
    <img src="{{asset('assets/img/home/formas_fondo3.png')}}" alt=""  style="width: 100%; ">

</div>


<div class="container">
    <h2 class="titulo-categoria text-uppercase mt-5 mb-4">
        {{$categoria->name}}
    </h2>
    <div class="row">

    @foreach ($packages as $producto )
    @include('ui.productos')
    @endforeach

    </div>


@endsection
