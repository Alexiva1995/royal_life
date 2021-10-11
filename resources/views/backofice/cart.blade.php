@extends('backofice.layouts.dashboard')
@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
@endpush
@section('content')
@include('backofice.ui.script')
@include('backofice.ui.carritoScript')
<style>
.zoomM:hover {

-webkit-transform:scale(1.07);
-moz-transform:scale(1.07);
-ms-transform:scale(1.07);
-o-transform:scale(1.07);
transform:scale(1.07);

-webkit-transition:all 0.3s ease;
-moz-transition:all 0.3s ease;
-o-transition:all 0.3s ease;
-ms-transition:all 0.3s ease;


border-color: #66FFCC !important;
box-shadow: 0 8px 25px -8px #66ffcc;
background-color: #66FFCC;
}

.zoomM:active {

-webkit-transform:scale(0.9);
-moz-transform:scale(0.9);
-ms-transform:scale(0.9);
-o-transform:scale(0.9);
transform:scale(0.9);

-webkit-transition:all 0.3s ease;
-moz-transition:all 0.3s ease;
-o-transition:all 0.3s ease;
-ms-transition:all 0.3s ease;


border-color: #66FFCC !important;
color: black!important;
box-shadow: 0 8px 25px -8px #66ffcc;
background-color: #66FFCC;
}

.zoomD:hover {

-webkit-transform:scale(1.2);
-moz-transform:scale(1.2);
-ms-transform:scale(1.2);
-o-transform:scale(1.2);
transform:scale(1.2);

-webkit-transition:all 0.3s ease;
-moz-transition:all 0.3s ease;
-o-transition:all 0.3s ease;
-ms-transition:all 0.3s ease;

border-color: #ff556c !important;
box-shadow: 0 8px 25px -8px #e00d29 !important;
background-color: #ff0000 ;
}

.zoomD:active {

-webkit-transform:scale(0.9);
-moz-transform:scale(0.9);
-ms-transform:scale(0.9);
-o-transform:scale(0.9);
transform:scale(0.9);

-webkit-transition:all 0.3s ease;
-moz-transition:all 0.3s ease;
-o-transition:all 0.3s ease;
-ms-transition:all 0.3s ease;


border-color: #ff556c !important;
color: black!important;
box-shadow: 0 8px 25px -8px #e00d29 !important;
background-color: #fd5d73 ;
}
.custominput{
    border: 0;
    outline: 0 !important;
}
.Rangoprecio2{
    height:40px;
   width:80px;
   background: #fd3232;
   -moz-border-radius:50px;
   -webkit-border-radius:50px;
   border-radius:50px;
   border: 0;
   outline: none;
   border: 0;
    outline: 0 !important;

}
.Rangoprecio3{
    height:40px;
   width:100px;

   -moz-border-radius:50px;
   -webkit-border-radius:50px;
   border-radius:50px;
   border: 0;
   outline: none;
   border: 0;
    outline: 0 !important;

}
.Rangoprecio4{
    height:40px;
    width:206px;

   -moz-border-radius:50px;
   -webkit-border-radius:50px;
   border-radius:7px;
   border: 0;
   outline: none;
   border: 0;
    outline: 0 !important;

}
</style>



<div class="carousel-inner">
    <img class="d-block w-100" src="{{asset('assets/img/home/formas_fondo3.png')}}" style="background: #173138;">
    <div class="container carousel-caption d-flex justify-content-start" style="top:90px;left: 7%;">
        <div class="row">
            <div class="col-md-6">
                <div class="text-left">
                    <h3 class="text-white" style="font-size: 50px;"><strong> Carrito </strong></h3>
                </div>
                <div class="text-left d-flex ml-1">
                    <a class="text-white" href="{{route('inicio')}}"><strong> Inicio </strong></a><strong class="ml-1">
                        > </strong>
                    <p style="color: #52CCA7" class="ml-1"><strong> Carrito </strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-5 pb-5">
    <div class="row d-flex">
        @if(Auth::user()== true)
        <div class="card col-12" style="background: white">
            <div class="table-responsive mt-2">
                <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                    <thead class="">
                        <tr class="text-center text-white bg-purple-alt2">
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Precio Por Unidad</th>
                            <th>Precio Total</th>
                            <th>Eliminar</th>
                        </tr>
                    <tbody>



                        @foreach ($products as $key => $item)
                        <tr class="text-center text-dark">
                            <td>
                            @if($item->getPackage->img == null)
                                    <img src="{{asset('assets/img/home/producto21.png')}}" alt="Product Image"
                                        style=" width: 100px; height: 100px;">
                             @else
                                   <img class=" o"
                                        src="{{ asset('storage/photo-producto/'.$item->getPackage->img) }}"
                                        alt="Product Image"
                                        style=" width: 100px; height: 100px;">
                             @endif
                            </td>
                            <td>{{$item->getPackage->name}}</td>
                            <td>{{$item->getCategories->categories_name}}</td>

                            <td>
                                <form method="POST" class="form form-vertical" action="{{route('cart.update',$item->id)}}" enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf

                                    <input type="hidden" name="monto"  value="{{$item->monto}}">
                                    <button class="Rangoprecio shadow zoomM custominput text-white"  onclick="handleClickResta1('cantidad{{$key}}')" type="submit"><i class="fa fa-minus"></i></button>

                                    <input  class="sinborde shadow  text-center text-dark"
                                            type="number"
                                            id="cantidad{{$key}}"
                                            name="cantidad"
                                            value="{{$item->cantidad}}"
                                            min="1" required >

                                    <button class="Rangoprecio shadow zoomM custominput text-white" onclick="handleClickSuma1('cantidad{{$key}}')"  type="submit"><i class="fa fa-plus"></i></button>


                            </form>
                            </td>

                            <td>${{$item->monto}}</td>
                            <td>${{($item->total)}}</td>
                            <td>
                                <form action="{{route('destroy',['producto'=>$item->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="shadow Rangoprecio2 text-white zoomD" value=""><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach



                    </tbody>
                    </thead>
                </table>
                <div class="container  ">
                    <div class="text-center link">
      {{--              {{$products->links('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex d-flex justify-content-end">
                            <div class="card bg-white text-dark ">
                      {{--            <p><strong>Sub Total:</strong> {{$suma}}$</p>
                                <p><strong>Iva: </strong>15%</p>
                                <p><strong>Total + Iva:</strong> {{($suma+(15/100)*$suma)}}$</p>
                            </div>--}}
                        </div>
                    </div>
                </div>

                <div class="container mb-1">
                    <div class="row d-flex">
                         <div class="col-3 d-flex justify-content-start">
                            <a href="{{route('shop.backofice')}}" class="btn btn-custom text-dark Rangoprecio4 " type="submit" style="background: #67FFCC"><strong
                                    style="color:#173138">continuar comprado</strong></a>
                        </div>

                        <div class="col-9 d-flex justify-content-end">
                            <form action="{{route('checkout.backofice')}}">
                            <button class="btn btn-custom text-dark Rangoprecio3 zoomM" type="submit" style="background: #67FFCC"><strong
                                    style="color:#173138">Pagar</strong></button>
                                </form>
                        </div>

                    </div>
                </div>


                @else
                <div class="card col-12" style="background: white">
                    <div class="table-responsive mt-2">
                        <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                            <thead class="">
                                @if(!empty($producto['CARRITO']))
                                <tr class="text-center text-white bg-purple-alt2">
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Cantidad</th>
                                    <th>Precio Por Unidad</th>
                                    <th>Precio Total</th>
                                    <th>Eliminar</th>
                                </tr>
                            <tbody>



                        @foreach ($producto['CARRITO'] as $indice=>$item )
                        <tr class="text-center text-dark">



                            <td>
                                <img src="{{asset('assets/img/home/producto21.png')}}" alt="Product Image"
                                style=" width: 100px; height: 100px;">
                            </td>




                            <td class="text-dark">{{$item['name']}}</td>
                            <td class="text-dark">{{$item['categorianame']}}</td>

                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    <input type="hidden"
                                    name="package_id"
                                    id="id"
                                    value="{{$item['package_id']}}">

                            <button class="Rangoprecio shadow zoomM custominput text-white"
                                    onclick="handleClickResta1('cantidad{{$indice}}')"
                                    type="submit"
                                    name="btnAccion"
                                   ><i class="fa fa-minus"></i></button>

                            <input  class="sinborde shadow  text-center text-dark"
                                    type="number"
                                    id="cantidad{{$indice}}"
                                    name="cantidad"
                                    value="{{$item['cantidad']}}"
                                    min="1" required >

                            <button class="Rangoprecio shadow zoomM custominput text-white"
                                    onclick="handleClickSuma1('cantidad{{$indice}}')"
                                    type="submit"
                                    name="btnAccion"
                                    value="SUMAR"><i class="fa fa-plus"></i></button>
                            </form>
                            </td>



                            <td class="text-dark">${{$item['monto']}}</td>
                            <td class="text-dark">${{$item['total']}}</td>

                            <td class="text-dark">
                                <form action="{{route('cart.GUEST')}}" method="POST">
                                    @csrf
                                    <input type="hidden"
                                    name="id"
                                    id="id"
                                    value="{{$item['package_id']}}">

                                <button
                                type="submit"
                                name="btnAccion"
                                class="shadow Rangoprecio2 text-white zoomD"
                                value="ELIMINAR">
                                <i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>

                        @endforeach
                        @else

                        <div class="alert alert-danger text-center">
                           <h4 style="color: #fd5d73"> <strong> Carrito Vacio </strong> </h4>
                        </div>

                        @endif
                    </tbody>
                </thead>
            </table>
        </div>
     </div>

     <div class="container mt-5 ">
        <div class="text-center link">
{{--              {{$products->links('pagination::bootstrap-4') }} --}}
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex d-flex justify-content-end">
                <div class="card bg-white text-dark ">
          {{--            <p><strong>Sub Total:</strong> {{$suma}}$</p>
                    <p><strong>Iva: </strong>15%</p>
                    <p><strong>Total + Iva:</strong> {{($suma+(15/100)*$suma)}}$</p>
                </div>--}}
            </div>
        </div>
    </div>

    <div class="container mb-1">
        <div class="row d-flex">
             <div class="col-3 d-flex justify-content-start">
                <a href="{{route('shop.backofice')}}" class="btn btn-custom text-dark Rangoprecio4 " type="submit" style="background: #67FFCC"><strong
                        style="color:#173138">continuar comprado</strong></a>
            </div>

            @if(!empty($producto['CARRITO']))
            <div class="col-9 d-flex justify-content-end">
                <form action="{{route('cart.GUEST')}}" method="POST">
                    @csrf
                <button class="btn btn-custom text-dark Rangoprecio3 zoomM"
                        type="submit"
                        style="background: #67FFCC"
                        name="btnAccion"
                        value="COMPRAR">
                        <strong
                        style="color:#173138">Pagar</strong></button>
                    </form>
            </div>

            @else
            <div class="col-9 d-flex justify-content-end">
            <button class="btn btn-custom text-dark Rangoprecio3 "
            type="submit"
            style="background: #e2dfdf"
            type="submit"
            name=""
            value="">
            <strong
            style="color:#173138">Pagar</strong></button>
            @endif
        </div>
    </div>


        @endif

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="card col-md-12" style="background: white">
            <div class="pt-3">
                <a href="">
                    <h2 style="color:#303030"><strong>Productos relacionados</strong></h2>
                </a>
            </div>
            <hr>

            <div class="row">

                <div class="card col-md-3" style="background: white">
                    <div class="product text-center">
                        <p class="text-center card-h">
                            <img class="mx-auto d-block img-ho" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-rel">
                                <p style="margin-left: -5px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:20px;"> <strong>$31</strong></p>
                            <h4 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h4>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Amet lobortis venenatis vel integer. Odio feugiat tortor eget
                                porttitor.</p>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3" style="background: white">
                    <div class="product text-center">
                        <p class="text-center card-h">
                            <img class="mx-auto d-block img-ho" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-rel">
                                <p style="margin-left: -5px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:20px;"> <strong>$31</strong></p>
                            <h4 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h4>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Amet lobortis venenatis vel integer. Odio feugiat tortor eget
                                porttitor.</p>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3" style="background: white">
                    <div class="product text-center">
                        <p class="text-center card-h">
                            <img class="mx-auto d-block img-ho" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-rel">
                                <p style="margin-left: -5px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:20px;"> <strong>$31</strong></p>
                            <h4 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h4>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Amet lobortis venenatis vel integer. Odio feugiat tortor eget
                                porttitor.</p>
                        </div>
                    </div>
                </div>
                <div class="card col-md-3" style="background: white">
                    <div class="product text-center">
                        <p class="text-center card-h">
                            <img class="mx-auto d-block img-ho" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-rel">
                                <p style="margin-left: -5px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:20px;"> <strong>$31</strong></p>
                            <h4 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h4>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Amet lobortis venenatis vel integer. Odio feugiat tortor eget
                                porttitor.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
