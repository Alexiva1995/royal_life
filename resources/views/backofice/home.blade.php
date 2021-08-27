@extends('backofice.layouts.dashboard')
@section('content')
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="contenedor carousel-item active">
                <div class="texto-encima d-flex justify-content-center">
                    <p style=" line-height: 4.5rem;">Tellus nibh <strong> mattis <br> ultricies</strong> phasellus</p>
                </div>
                <div class="centrado d-flex justify-content-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat, semper ac facilisi gravida velit consequat, tempor, volutpat. Libero, diam tellus ut sed nec sed sem tortor volutpat. Cras a ornare nisi auctor tellus tortor, mattis. Nisl arcu sit massa at faucibus eros tincidunt.</p>
                </div>
                <a href="{{route('shop.backofice')}}" class="btn btn-pry"><strong>ir a la tienda</strong></a>
                <img src="{{asset('assets/img/home/Polygon5.png')}}" alt="" class="debajo">
                <img src="{{asset('assets/img/home/producto1.png')}}" alt="" class="sobre">

                <img class="d-block w-100"
                    data-src="holder.js/900x300?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide"
                    alt="First slide [900x300]" src="{{asset('assets/img/home/formas_fondo1.png')}}"
                    data-holder-rendered="true">

            </div>
        </div>

        <div class="container mt-5">
            <div class="text-center">
                <h1 class="texto-title mb-2"><strong> Categorias de nuetros productos </strong></h1>
                <p class="texto-simple mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tellus pharetra amet
                    nunc sed etiam nibh et, morbi. Morbi commodo lorem purus non dui.</p>
            </div>
        </div>
        <div class="carousel-inner">
            <div class="row d-flex justify-content-center pb-5">
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: #303030;" href="{{route('shop.backofice')}}"> ver todos
                            los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></a>
                </div>
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: #303030;" href="{{route('shop.backofice')}}">ver todos
                            los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""> </a>
                </div>
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: #303030;" href="{{route('shop.backofice')}}"> ver todos
                            los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></a>
                </div>
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: #303030;" href="{{route('shop.backofice')}}"> ver todos
                            los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></a>
                </div>
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: #303030;" href="{{route('shop.backofice')}}"> ver todos
                            los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></a>
                </div>
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: #303030;" href="{{route('shop.backofice')}}"> ver todos
                            los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></a>
                </div>
            </div>
        </div>

        <div class="p-1" style="background:#F0FFFA;">
            <div class="container mb-3">
                <h1 class="texto-title mt-5 mb-1" style="margin-left: 20px;"><strong>Los más vendidos</strong></h1>
                <p style="margin-left: 20px;color: #303030;font-size: 15px;">Lorem, ipsum dolor sit amet, consectetur
                    adipisicing elit. Purus malesuada et.
                </p>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;border-radius: 10px;padding: 0.8rem;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;border-radius: 10px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: #303030; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                            </a>
                            <p
                                style="color: #303030;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>

                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;border-radius: 10px;padding: 0.8rem;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;border-radius: 10px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: #303030; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                            </a>
                            <p
                                style="color: #303030;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>


                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;border-radius: 10px;padding: 0.8rem;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;border-radius: 10px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: #303030; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                            </a>
                            <p
                                style="color: #303030;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>
                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;border-radius: 10px;padding: 0.8rem;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;border-radius: 10px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: #303030; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                            </a>
                            <p
                                style="color: #303030;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>

                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;border-radius: 10px;padding: 0.8rem;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;border-radius: 10px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: #303030; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                            </a>
                            <p
                                style="color: #303030;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>


                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;border-radius: 10px;padding: 0.8rem;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;border-radius: 10px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: #303030; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                            </a>
                            <p
                                style="color: #303030;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>


                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;border-radius: 10px;padding: 0.8rem;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;border-radius: 10px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: #303030; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                            </a>
                            <p
                                style="color: #303030;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>


                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;border-radius: 10px;padding: 0.8rem;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;border-radius: 10px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: #303030; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                            </a>
                            <p
                                style="color: #303030;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>

                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;border-radius: 10px;padding: 0.8rem;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;border-radius: 10px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: #303030; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -9px; margin-left: -10px;">cremas</p>
                            </a>
                            <p
                                style="color: #303030;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="contenedor d-flex" style="background: #173138">
            <div class="texto-arriba">
                <strong>Productos CBD con los mas altos estandares de calidad</strong>
            </div>
            <div class="texto-abajo">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet pellentesque massa sollicitudin scelerisque morbi. Tempus sed euismod cursus non porttitor velit. Volutpat facilisi mauris, et nunc risus justo, netus.
            </div>
            <img src="{{asset('assets/img/home/formas_fondo2.png')}}" alt="" width="50%">
            <img src="{{asset('assets/img/home/cbd1.png')}}" alt="" width="50%">
        </div>

        <div class="container mt-5">
            <div class="text-center">
                <h1 class="texto-title mb-2"><strong> Productos </strong></h1>
                <p class="texto-simple mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ligula facilisi
                    quis <br> lectus morbi phasellus arcu. Mus viverra feugiat mattis sollicitudin consequat</p>
            </div>
        </div>

        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-4 mb-1 cus-md-4 ml-1">
                    <div class="card-body product text-center">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-left: -18px;margin-top: -10px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="text-center">
                <h1 class="texto-title"><strong> Clientes satisfechos </strong></h1>
                <p class="texto-simple">curabitur lacus arcu, sodales in quam sed, commodo efficitur liguia</p>
            </div>
        </div>
        <div class="testimonials-clean">
            <div class="container">
                <div class="row people">
                    <div class="col-md-6 item">
                        <div class="box">
                            <div style="margin-top: 8px;">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                            </div>
                            <div>
                                <p class="description" style="margin-top: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel habitant elementum volutpat neque viverra. Risus felis metus, enim amet suspendisse elit in. Egestas turpis vitae et, et nibh porttitor. Accumsan eget.</p>
                            </div>
                        </div>
                        <div class="author"><img class="rounded-circle" src="{{asset('assets/img/home/Ellipse.png')}}"
                                style="margin-top: 5px;">
                            <h5 class="name" style="margin-top: 5px;">Antonio Medina</h5>
                            <p class="title"><strong>Cliente</strong></p>
                        </div>
                    </div>
                    <div class="col-md-6 item">
                        <div class="box" style="width: 102%;">
                            <div style="margin-top: 8px;">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                            </div>
                            <p class="description" style="margin-top: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vel habitant elementum volutpat neque viverra. Risus felis metus, enim amet suspendisse elit in. Egestas turpis vitae et, et nibh porttitor. Accumsan eget.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="{{asset('assets/img/home/Ellipse1.png')}}"
                                style="margin-top: 5px;">
                            <h5 class="name" style="margin-top: 5px;">Felipe Minaya</h5>
                            <p class="title"><strong>Cliente</strong></p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <img src="{{asset('assets/img/home/Rectangle29.png')}}" alt="" style="margin-top: -215px; width: 70%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center mt-3">
                <div class="contenedorborder mb-2 ml-1 " style="background: #173138">
                    <div class="texto-dearriba">
                        <strong>Faucibus pulvinar euismod tincidunt</strong>
                    </div>
                    <div class="texto-debajo">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.Quam blandit ac commodo turpis turpis. Ipsum adipiscing lacus, quis aliquam magna leo. Quam convallis pellentesque sed ipsum sit malesuada libero fermentum. Volutpat dolor vitae adipiscing mi. ut nec felis dolor a eu viverra sed adipiscing.
                    </div>
                    <a href="{{route('contact_us')}}" class="btn btn-pri"><strong>Contáctanos</strong></a>
                    <img class="w-100" src="{{asset('assets/img/home/formas_fondo22.png')}}" alt="">
                </div>
            </div>
        </div>
        @endsection
