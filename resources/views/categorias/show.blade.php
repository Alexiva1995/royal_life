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
.text-iz{

position: relative;
top: 1px;
height:200px;
left: -155px;
}

.btn-custom{
    width: 220px;
    height: auto;

    background: #67FFCC;
    border-radius: 7px;
}

</style>
@endpush

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


        <div class="container d-fex col-md-8">
            <div class="row d-flex justify-content-end mt-5">
               @foreach ($packages as $producto )


               <div class="col-md-6">
                   <div class="col-md-12 ">

                       <div class="mt-1 card col-mt-5 col-md-12  zoom " style="background:#FFFFFF">
                           <p class=" text-center bdr bar  " style= "background: #67FFCC;      ">
                               <img class="  " src="{{asset('storage/photo-profile/'.$producto->img)}}"   width="150" height="150" >
                           </p>
                           <div class="card-body bar2">
                               <form action="{{route('cheking.backofice')}}" method="POST" target="_blank" class="d-inline">
                                   @csrf

                               <input type="hidden" name="categories_id" value="{{$producto->categories_id}}">
                               <p class="text-right" style="color: rgb(0, 0, 0);"><strong class="text-iz"></strong> <strong>${{$producto->price}}</strong></p>
                               <p class="text-left"  style="color:  #000000;"><strong>{{$producto->categories_id}}</strong></p>
                               <p class="text-left"  style="color:  #303030;">{{ Str::words( strip_tags($producto->description) , 15 )}}</p>

                               <button
                               class="btn btn-custom text-white"
                               type="submit"
                               style="background: #67FFCC;"
                               > <strong style="color:#000000;"> Comprar  </strong></button>
                               </form>
                           </div>
                       </div>

                   </div>
               </div>


               @endforeach
           </div>
       </div>


    </div>


@endsection
