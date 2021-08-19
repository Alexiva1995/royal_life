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


        <div class="" style="background: #173138">
            <div class="texto-tienda">
                <strong>Tienda</strong>
             </div>
             <div class="texto-tiendaB">
               <p>Inicio <strong> > </strong>Tienda</p>
             </div>
            <img src="{{asset('assets/img/home/formas_fondo3.png')}}" alt=""  style="width: 100%;">
        </div>

<div class="">
  {{--  <div class="container ">
        <div class="card col col-3  mt-5 " style="background:#FFFFFF" >
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
    </div>




    @foreach ($packages as $paquete )
    <div class="container">
        <div class="row d-flex justify-content-end mt-5">
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
</div> --}}

<div id="adminServices" >
    <div class="">
     <div class="col-12 ">

        <div class="" style="background:#E5E5E5">
            <div class="card-content ">
                <div class="card-body card-group mt-12 ">
                   <h1 class="text-white">Tienda</h1>
                   <div class=" d-fex col-md-3">
                    <div class="row d-flex justify-content-start mt-5">
                        <div class="card col-12" style="background:#FFFFFF" >
                            <h6> <strong> categorias </strong></h6>

                           {{-- @foreach ( $categorias as $categoria )

                            <div class="form-check">
                                <input class="form-check-input"
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
                              @endforeach --}}
                            </div>
                     </div>
                     </div>
                    <div class="container d-fex col-md-6">
                     <div class="row d-flex justify-content-end mt-5">
                        @foreach ($packages as $producto )

                        <div class="col-md-6">


                            <div class="col-md-12 ">

                                <div class="card col-mt-5 col-md-12 shadow zoom " style="background:#FFFFFF">
                                    <p class=" text-center bdr bar  " style= "background: #67FFCC;      ">
                                        <img class="  " src="{{asset('storage/photo-profile/'.$producto->img)}}"   width="150" height="150" >
                                    </p>
                                    <div class="card-body">

                                        <input type="hidden" name="idproduct" value="{{$producto->categoria_id}}}">
                                        {{-- <input type="hidden" name="categories_id" value="{{$categoria->id}}"> --}}
                                        <p class="text-right" style="color: rgb(0, 0, 0);"><strong>  ${{$producto->price}}</strong></p>
                                        <p class="text-left"  style="color:  #000000;"><strong>{{$producto->name}}</strong></p>
                                        <p class="text-left"  style="color:  #303030;">{{ Str::words( strip_tags($producto->description) , 15 )}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
