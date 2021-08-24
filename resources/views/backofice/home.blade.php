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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sit ipsa quod, aut quo inventore
                        dolore? Est quisquam, doloremque odit deleniti veritatis consectetur. Dolor debitis cumque,
                        consequuntur voluptatibus provident molestias.</p>
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
                <p class="texto-simple">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tellus pharetra amet
                    nunc sed etiam nibh et, morbi. Morbi commodo lorem purus non dui.</p>
            </div>
        </div>
        <div class="carousel-inner">
            <div class="row d-flex justify-content-center">
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: black;" href="{{route('shop.backofice')}}"><strong> ver todos
                            los productos</strong> <img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></a>
                </div>
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: black;" href="{{route('shop.backofice')}}"><strong> ver todos
                            los productos</strong> <img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""> </a>
                </div>
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: black;" href="{{route('shop.backofice')}}"><strong> ver todos
                            los productos</strong> <img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></a>
                </div>
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: black;" href="{{route('shop.backofice')}}"><strong> ver todos
                            los productos</strong> <img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></a>
                </div>
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: black;" href="{{route('shop.backofice')}}"><strong> ver todos
                            los productos</strong> <img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></a>
                </div>
                <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card"><strong>Cremas</strong></div>
                    <a class="text-center" style="color: black;" href="{{route('shop.backofice')}}"><strong> ver todos
                            los productos</strong> <img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></a>
                </div>
            </div>
        </div>

        <div class="p-1" style="background:#F0FFFA;">
            <div class="container mb-3">
                <h1 class="texto-title mt-5 ml-3 mb-1"><strong>Los más vendidos</strong></h1>
                <p style="color: black; font-size: 20px;" class="ml-3">Lorem, ipsum dolor sit amet, consectetur
                    adipisicing elit. Purus malesuada et.
                </p>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: black; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p
                                style="color: black;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>

                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: black; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p
                                style="color: black;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>


                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: black; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p
                                style="color: black;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>
                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: black; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p
                                style="color: black;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>

                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: black; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p
                                style="color: black;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>


                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: black; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p
                                style="color: black;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>


                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: black; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p
                                style="color: black;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>


                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: black; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p
                                style="color: black;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                                <strong>31$</strong></p>
                        </div>
                    </div>
                </div>

                <div class="card-body cus-md-3 mb-1 ml-md-1" style="background: white;">
                    <div class="d-flex">
                        <div style="height:145px;width:100px;background:#66FFCC;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}"
                                style="width: 90%;">
                        </div>
                        <div class="col-6">
                            <h5><strong>Pomada CBD</strong></h5>
                            <p class="card-text" style="color: black; width: 160px;">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id pellentesque auctor.</p>
                            <a href="" class="btn btn-cre">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p
                                style="color: black;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nihil illum doloremque modi excepturi,
                voluptatem quam voluptatibus maiores harum expedita ex aut quidem est dolores vitae similique, explicabo
                facere quae.
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
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
                            </a>
                            <p class="text-right" style="color:black;font-size:25px;"> <strong>$31</strong></p>
                            <h3 class="text-left" style="color:black;"><strong>Pomada CBD</strong></h3>
                            <p class="text-left" style="color:#303030;">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center" style="background:#FFFFFF">
                        <p class="text-center"
                            style="background: #67FFCC;border-top-right-radius: 5px;border-top-left-radius: 5px;">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                        </p>
                        <div class="card-body">
                            <a href="" class="btn btn-cren">
                                <p style="margin-top: -7px;">cremas</p>
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
                                <p class="description" style="margin-top: 30px;">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Unde quam provident pariatur cum! Porro, magni in earum debitis
                                    unde quaerat error reiciendis optio modi consequatur sapiente consequuntur
                                    laboriosam praesentium consectetur?</p>
                            </div>
                        </div>
                        <div class="author"><img class="rounded-circle" src="{{asset('assets/img/home/Ellipse.png')}}"
                                style="margin-top: 5px;">
                            <h5 class="name" style="margin-top: 5px;">Antonio Medina</h5>
                            <p class="title"><strong>Cliente</strong></p>
                        </div>
                    </div>
                    <div class="col-md-6 item">
                        <div class="box">
                            <div style="margin-top: 8px;">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                                <img src="{{ asset('assets/img/home/Vector.png') }}" alt="">
                            </div>
                            <p class="description" style="margin-top: 30px;">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Officia quod veritatis dicta tempore id. Mollitia dolor quo molestiae
                                fugiat laudantium, odio repellendus tenetur provident nihil rerum quod placeat?
                                Voluptate, asperiores.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="{{asset('assets/img/home/Ellipse1.png')}}"
                                style="margin-top: 5px;">
                            <h5 class="name" style="margin-top: 5px;">Felipe Minaya</h5>
                            <p class="title"><strong>Cliente</strong></p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <img src="{{asset('assets/img/home/Rectangle29.png')}}" alt="" style="margin-top: -215px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="contenedorborder mb-2" style="background: #173138">
                    <div class="texto-dearriba">
                        <strong>Faucibus pulvinar euismod tincidunt</strong>
                    </div>
                    <div class="texto-debajo">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nihil illum doloremque modi
                        excepturi, voluptatem quam voluptatibus maiores harum expedita ex aut quidem est dolores vitae
                        similique, explicabo facere quae.
                    </div>
                    <a href="{{route('contact_us')}}" class="btn btn-pri"><strong>Contactanos</strong></a>
                    <img src="{{asset('assets/img/home/formas_fondo22.png')}}" alt="">
                </div>
            </div>
        </div>
        @endsection
