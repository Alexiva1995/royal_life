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
    top: 15px;
	height:200px;
}

.bar2 {
    position: relative;

}

.caja{
    background: #F5F5F5;
border: 1px solid #DADADA;
box-sizing: border-box;
border-radius: 5px;
}
.btn-custom{
    width: 220px;
    height: auto;

    background: #67FFCC;
    border-radius: 7px;
}

.circulo{

width: 15px;
height: 15px;
left: 206px;
top: 810px;

background: #FFFFFF;
border: 2px solid #000000;
box-sizing: border-box;
}

.s{
    color: #67FFCC;
    text-decoration: none;
    background-image: linear-gradient(currentColor, currentColor);
    background-position: 0% 100%;
    background-repeat: no-repeat;
    background-size: 0% 2px;
    transition: background-size .3s;

}

.s:hover, s:focus {
    color: #67FFCC;
    background-size: 100% 2px;
}

.container {
        display: flex;
      }

.text-iz{

    position: relative;
    top: 1px;
	height:200px;
    left: -155px;

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
            <img src="{{asset('assets/img/home/formas_fondo3.png')}}" alt=""  style="width: 100%; ">

        </div>

<div class="">


<div class="container ml-24" >
    <div class="ml-7">
     <div class="col-12 ">

        <div class="ml-7" style="background:#ffffff">
            <div class="card-content ">
                <div class="card-body card-group mt-12 ">

                   <div class=" d-fex col-md-3">
                    <div class="row d-flex justify-content-start mt-5">
                        <div class="card col-12" style="background:#FFFFFF" >
                            <div class="card-body">
                            <h6> <strong> Categorias </strong></h6>
                            <hr class="hr">
                            @foreach ( $categorias as $categoria )

                            <div class="form-check">
                                <input class="form-check-input"
                                       type="checkbox"
                                       value="{{$categoria->id}}"
                                       id="flexCheckDefault">

                                <label class="form-check-label mb-1"
                                       for="flexCheckDefault"
                                       style="">
                                       <a class="s" href="{{ route('categorias.show', ['Categories' => $categoria->id ]) }}">
                                      <strong class=" text-dark ">{{ $categoria->name }}</strong>
                                     </a>
                                </label>
                              </div>
                              @endforeach
                              <br>
                              <h6><strong> Precio </strong><h6>
                              <hr class="hr">
                              <div class="progress" style="height: 3px;">
                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                        </div>
                     </div>
                     </div>
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
                                        <input type="hidden" name="idproduct" value="{{$producto->categoria_id}}}">
                                        <input type="hidden" name="idproduct" value="">
                                        {{-- <input type="hidden" name="categories_id" value="{{$categoria->id}}"> --}}
                                        <p class="text-right" style="color: rgb(0, 0, 0);"><strong class="text-iz">{{$categoria->name}}</strong> <strong>${{$producto->price}}</strong></p>
                                        <p class="text-left"  style="color:  #000000;"><strong>{{$producto->name}}</strong></p>
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
            </div>
        </div>
    </div>
</div>
</div>

@endsection
