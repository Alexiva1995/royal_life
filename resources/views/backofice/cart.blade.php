@extends('backofice.layouts.dashboard')
@section('content')

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
        <div class="card col-12" style="background: white">
            <div class="table-responsive mt-2">
                <table class="table nowrap scroll-horizontal-vertical myTable table-striped">
                    <thead class="">
                        <tr class="text-center text-white bg-purple-alt2">
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Precio Total</th>
                        </tr>
                    <tbody>
                        <tr class="text-center text-dark">
                            <td><img src="{{asset('assets/img/home/producto21.png')}}" alt="Product Image"
                                    style=" width: 100px; height: 100px;"></td>
                            <td>Pomada CBD</td>
                            <td>Cremas</td>
                            <td>
                                <div class="sumador">
                                    <button class="Rangoprecio shadow zoom4"><i class="fa fa-minus"></i></button>
                                    <input class="sinborde shadow text-center" type="" value="1">
                                    <button class="Rangoprecio mr-3 shadow zoom4"><i class="fa fa-plus"></i></button>
                                    <button class="Rangoprecio mr-3 shadow zoom4"
                                        style="position: relative;left: -42px;"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                            <td>$31</td>
                            <td>31$</td>
                        </tr>

                        <tr class="text-center text-dark">
                            <td><img src="{{asset('assets/img/home/producto21.png')}}" alt="Product Image"
                                    style=" width: 100px; height: 100px;"></td>
                            <td>Pomada CBD</td>
                            <td>Cremas</td>
                            <td>
                                <div class="sumador">
                                    <button class="Rangoprecio shadow zoom4"><i class="fa fa-minus"></i></button>
                                    <input class="sinborde shadow text-center" type="" value="1">
                                    <button class="Rangoprecio mr-3 shadow zoom4"><i class="fa fa-plus"></i></button>
                                    <button class="Rangoprecio mr-3 shadow zoom4"
                                        style="position: relative;left: -42px;"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                            <td>$31</td>
                            <td>31$</td>
                        </tr>

                        <tr class="text-center text-dark">
                            <td><img src="{{asset('assets/img/home/producto21.png')}}" alt="Product Image"
                                    style=" width: 100px; height: 100px;"></td>
                            <td>Pomada CBD</td>
                            <td>Cremas</td>
                            <td>
                                <div class="sumador">
                                    <button class="Rangoprecio shadow zoom4"><i class="fa fa-minus"></i></button>
                                    <input class="sinborde shadow text-center" type="" value="1">
                                    <button class="Rangoprecio mr-3 shadow zoom4"><i class="fa fa-plus"></i></button>
                                    <button class="Rangoprecio mr-3 shadow zoom4"
                                        style="position: relative;left: -42px;"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                            <td>$31</td>
                            <td>31$</td>
                        </tr>

                        <tr class="text-center text-dark">
                            <td><img src="{{asset('assets/img/home/producto21.png')}}" alt="Product Image"
                                    style=" width: 100px; height: 100px;"></td>
                            <td>Pomada CBD</td>
                            <td>Cremas</td>
                            <td>
                                <div class="sumador">
                                    <button class="Rangoprecio shadow zoom4"><i class="fa fa-minus"></i></button>
                                    <input class="sinborde shadow text-center" type="" value="1">
                                    <button class="Rangoprecio mr-3 shadow zoom4"><i class="fa fa-plus"></i></button>
                                    <button class="Rangoprecio mr-3 shadow zoom4"
                                        style="position: relative;left: -42px;"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                            <td>$31</td>
                            <td>31$</td>
                        </tr>

                        <tr class="text-center text-dark">
                            <td><img src="{{asset('assets/img/home/producto21.png')}}" alt="Product Image"
                                    style=" width: 100px; height: 100px;"></td>
                            <td>Pomada CBD</td>
                            <td>Cremas</td>
                            <td>
                                <div class="sumador">
                                    <button class="Rangoprecio shadow zoom4"><i class="fa fa-minus"></i></button>
                                    <input class="sinborde shadow text-center" type="" value="1">
                                    <button class="Rangoprecio mr-3 shadow zoom4"><i class="fa fa-plus"></i></button>
                                    <button class="Rangoprecio mr-3 shadow zoom4"
                                        style="position: relative;left: -42px;"><i class="fa fa-trash"></i></button>
                                </div>
                            </td>
                            <td>$31</td>
                            <td>31$</td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
                <div class="container mb-1">
                    <div class="row d-flex">
                         <div class="col-3 d-flex justify-content-start">
                            <a href="{{route('shop.backofice')}}" class="btn btn-custom text-dark " type="submit" style="background: #67FFCC"><strong
                                    style="color:#173138">continuar comprado</strong></a>
                        </div>
                        <div class="col-9 d-flex justify-content-end">
                            <button class="btn btn-custom text-dark " type="submit" style="background: #67FFCC"><strong
                                    style="color:#173138">Pagar</strong></button>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
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
