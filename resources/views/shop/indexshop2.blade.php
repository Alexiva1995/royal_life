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
.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}

.bdr
{
    border-radius: 6px;overflow:hidden;

}
.bar {
    position: relative;
   top: 10px;
}

.form-check-input{
    background: #F5F5F5;
border: 1px solid #DADADA;
box-sizing: border-box;
border-radius: 5px;
}

</style>
@endpush

@section('content')

<div class="container">
    <div class="row  ">

        <div class="card col col-3  mt-5" style="background:#FFFFFF" >
            <h6> <strong> categorias </strong></h6>

           @foreach ( $categorias as $categoria )

            <div class="form-check">
                <input class="form-check-input "
                       type="checkbox"
                       value="{{$categoria->id}}"
                       id="flexCheckDefault">

                <label class="form-check-label"
                       for="flexCheckDefault"
                       style="color:  #303030;">
                       <a class="nav-link" href="{{ route('categorias.show', ['Categories' => $categoria->id ]) }}">
                        {{ $categoria->name }}
                     </a>
                </label>
              </div>
              @endforeach
            </div>


    @foreach ($packages as $paquete )

    <div class=" col col-md-4 mt-5  ">
        <div class="col">
        <div class="card col-mt-5 col-md-10 shadow zoom "  style="background:#FFFFFF">
             <p class=" text-center bdr bar  " style= "background: #67FFCC;      ">
                <img class="  " src="{{asset('storage/photo-profile/'.$paquete->img)}}"   width="150" height="150" >
            </p>
                <div class="card-body hover2">
                    <h3 class="card-title texto3"><strong>{{$paquete->name}}</strong></h3>
                    <p>{{ Str::words( strip_tags($paquete->description) , 15 )}}</p>
                 <div class="meta-receta d-flex justify-content-between">

                 </div>
                </div>
            </div>
          </div>
        </div>
        @endforeach
   </div>
</div>

@endsection
