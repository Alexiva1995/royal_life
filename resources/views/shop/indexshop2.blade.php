@extends('layouts.dashboard')

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

</style>
@endpush

@section('content')
<div class="container ">
    <div class="row">
         <div class="col-md-10">


            <div class="container d-fex col-md-6  ">
                <div class="row d-flex justify-content-end mt-5">
                <div class="card" style="background:#FFFFFF">


                <div class="card-body  card-group mt-12" style="background:#FFFFFF" >

                 <h3></h3>

                 </div>
                 </div>

                </div>
            </div>

         </div>
     </div>
</div>

<div class="container">
<div class="row">
    @foreach ($packages as $paquete )
<div class="col-md-4 mt-4">
    <div class="card shadow zoom"  style="background:#FFFFFF">
        <p class=" text-center  " style= "background: #67FFCC;  ">
         <img class=" card-img-top " src="{{asset('storage/photo-profile/'.$paquete->img)}}"   width="150" height="150" >
        </p>

        <div class="card-body hover2">
           <h3 class="card-title texto3"><strong>hola</strong></h3>
           <div class="meta-receta d-flex justify-content-between">
           </div>
        </div>
          </div>

        </div>
        @endforeach
   </div>
</div>

@endsection
