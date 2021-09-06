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
            <div class="card" style="background: white">
            <div class="card-body">
                <div class="d-flex">
                    <div style="background:#66FFCC;border-radius: 10px;width: 100px;">
                        <img class="mx-auto d-block" src="{{asset('assets/img/home/producto24.png')}}"
                            style="height: 125px;">
                    </div>
                    <div class="col-md-11">
                        <h5><strong>Pomada CBD</strong></h5>
                        <p class="card-text" style="color: #303030;font-size: 13px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                        <a href="" class="btn btn-cart">
                            <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                        </a>
                        <p class="text-right" style="color: #303030;font-size: 20px;margin-bottom: 0;">
                            <strong>31$</strong></p>
                    </div>
                </div>
            </div>
        </div>

            <div class="card-body">
                <div class="d-flex">
                    <div style="background:#66FFCC;border-radius: 10px;width: 100px;">
                        <img class="mx-auto d-block" src="{{asset('assets/img/home/producto24.png')}}"
                            style="height: 125px;">
                    </div>
                    <div class="col-md-11">
                        <h5><strong>Pomada CBD</strong></h5>
                        <p class="card-text" style="color: #303030;font-size: 13px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                        <a href="" class="btn btn-cart">
                            <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                        </a>
                        <p class="text-right" style="color: #303030;font-size: 20px;margin-bottom: 0;">
                            <strong>31$</strong></p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div style="background:#66FFCC;border-radius: 10px;width: 100px;">
                        <img class="mx-auto d-block" src="{{asset('assets/img/home/producto24.png')}}"
                            style="height: 125px;">
                    </div>
                    <div class="col-md-11">
                        <h5><strong>Pomada CBD</strong></h5>
                        <p class="card-text" style="color: #303030;font-size: 13px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                        <a href="" class="btn btn-cart">
                            <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                        </a>
                        <p class="text-right" style="color: #303030;font-size: 20px;margin-bottom: 0;">
                            <strong>31$</strong></p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <div style="background:#66FFCC;border-radius: 10px;width: 100px;">
                        <img class="mx-auto d-block" src="{{asset('assets/img/home/producto24.png')}}"
                            style="height: 125px;">
                    </div>
                    <div class="col-md-11">
                        <h5><strong>Pomada CBD</strong></h5>
                        <p class="card-text" style="color: #303030;font-size: 13px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                        <a href="" class="btn btn-cart">
                            <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                        </a>
                        <p class="text-right" style="color: #303030;font-size: 20px;margin-bottom: 0;">
                            <strong>31$</strong></p>
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
