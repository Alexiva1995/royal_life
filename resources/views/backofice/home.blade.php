@extends('backofice.layouts.dashboard')
@section('content')
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide mb-5" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="contenedor carousel-item active">
                <div class="texto-encima d-flex justify-content-center">
                    <p style=" line-height: 3.5rem;">Tellus nibh <strong> mattis <br> ultricies</strong> phasellus</p>
                </div>
                <div class="centrado d-flex justify-content-center">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sit ipsa quod, aut quo inventore
                        dolore? Est quisquam, doloremque odit deleniti veritatis consectetur. Dolor debitis cumque,
                        consequuntur voluptatibus provident molestias.</p>
                </div>
                <button class="btn btn-pry"><strong>ir a la tienda</strong></button>
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
                <h1 class="texto-title"><strong> Categorias de nuetros productos </strong></h1>
                <p class="texto-simple">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab doloribus vitae
                    provident, cumque voluptatum nemo libero quod esse repudiandae repellat distinctio at porro nisi?
                    Dignissimos corrupti in ullam inventore dolor?</p>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class=" mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card">Cremas</div>
                    <p class="text-center" style="color: black;"><strong> ver todos los productos</strong> <img
                            src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></p>
                </div>
                <div class="mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card">Cremas</div>
                    <p class="text-center" style="color: black;"><strong> ver todos los productos</strong> <img src="{{asset('assets/img/home/Arrow1.png')}}" alt=""> </p>
                </div>
                <div class="mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card">Cremas</div>
                    <p class="text-center" style="color: black;"><strong> ver todos los productos</strong> <img
                            src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></p>
                </div>
                <div class="mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card">Cremas</div>
                    <p class="text-center" style="color: black;"><strong> ver todos los productos</strong> <img
                            src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></p>
                </div>
                <div class="mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card">Cremas</div>
                    <p class="text-center" style="color: black;"><strong> ver todos los productos</strong> <img
                            src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></p>
                </div>
                <div class="mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                    <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                    <div class="text-center text-card">Cremas</div>
                    <p class="text-center" style="color: black;"><strong> ver todos los productos</strong> <img
                            src="{{asset('assets/img/home/Arrow1.png')}}" alt=""></p>
                </div>
            </div>
        </div>

        <div class="p-5" style="background:#F0FFFA;">
            <div class="container mb-3">
                <h1 class="texto-title mt-5"><strong>Los más vendidos</strong></h1>
                <p style="color: black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab doloribus vitae
                    provident, cumque voluptatum nemo libero quod esse repudiandae repellat distinctio at porro nisi.
                    </p>
            </div>
                    
                        <div class="row d-flex justify-content-center">
                    <div class="card-body col-md-3 mb-1 ml-md-1" style="background: white;">
                        <div class="d-flex">
                            <div style="background:#66FFCC; ">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="">
                        </div>
                        <div class="col-6">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text" style="color: black;">
                                Some quick example text to build on the card title
                                and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                    </div>

                    <div class="card-body col-md-3 mb-1 ml-md-1" style="background: white;">
                        <div class="d-flex">
                            <div style="background:#66FFCC; ">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="">
                        </div>
                        <div class="col-6">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text" style="color: black;">
                                Some quick example text to build on the card title
                                and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                    </div>

                    <div class="card-body col-md-3 mb-1 ml-md-1" style="background: white;">
                        <div class="d-flex">
                            <div style="background:#66FFCC; ">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="">
                        </div>
                        <div class="col-6">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text" style="color: black;">
                                Some quick example text to build on the card title
                                and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                    </div>

                    <div class="card-body col-md-3 mb-5 ml-md-1" style="background: white;">
                        <div class="d-flex">
                            <div style="background:#66FFCC; ">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="">
                        </div>
                        <div class="col-6">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text" style="color: black;">
                                Some quick example text to build on the card title
                                and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                    </div>

                    <div class="card-body col-md-3 mb-5 ml-md-1" style="background: white;">
                        <div class="d-flex">
                            <div style="background:#66FFCC; ">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="">
                        </div>
                        <div class="col-6">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text" style="color: black;">
                                Some quick example text to build on the card title
                                and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                    </div>

                    <div class="card-body col-md-3 mb-5 ml-md-1" style="background: white;">
                        <div class="d-flex">
                            <div style="background:#66FFCC; ">
                            <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="">
                        </div>
                        <div class="col-6">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text" style="color: black;">
                                Some quick example text to build on the card title
                                and make up the bulk of the card's content.
                            </p>
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nihil illum doloremque modi excepturi, voluptatem quam voluptatibus maiores harum expedita ex aut quidem est dolores vitae similique, explicabo facere quae.
             </div>
            <img src="{{asset('assets/img/home/formas_fondo2.png')}}" alt="" width="50%">
            <img src="{{asset('assets/img/home/cbd1.png')}}" alt="" width="50%">
        </div>

        <div class="container mt-5">
            <div class="text-center">
                <h1 class="texto-title"><strong> Productos </strong></h1>
                <p class="texto-simple">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab doloribus vitae
                    provident, cumque voluptatum nemo libero quod esse repudiandae repellat distinctio at porro nisi?
                    Dignissimos corrupti in ullam inventore dolor?</p>
            </div>
        </div>

        <div class="container ">
            <div class="row d-flex justify-content-center">
               <div class="col-md-4">
                   <div class="col-md-12 ">
                       <div class="card text-center zoom" style="background:#FFFFFF">
                               <p class=" text-center  " style= "background: #67FFCC;  ">
                                   <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                               </p>
                           <div class="card-body">
                               <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                               <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                               <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 ">
                    <div class="card text-center zoom" style="background:#FFFFFF">
                            <p class=" text-center  " style= "background: #67FFCC;  ">
                                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" >
                            </p>
                        <div class="card-body">
                            <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>$31</strong></p>
                            <p class="text-left"  style="color:  #000000;"><strong>Pomada CBD</strong></p>
                            <p class="text-left" style="color:  #303030;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
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
                        <p class="description" style="margin-top: 30px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quam provident pariatur cum! Porro, magni in earum debitis unde quaerat error reiciendis optio modi consequatur sapiente consequuntur laboriosam praesentium consectetur?</p>
                    </div>
                    </div>
                    <div class="author"><img class="rounded-circle" src="{{asset('assets/img/home/Ellipse.png')}}" style="margin-top: 5px;">
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
                        <p class="description" style="margin-top: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quod veritatis dicta tempore id. Mollitia dolor quo molestiae fugiat laudantium, odio repellendus tenetur provident nihil rerum quod placeat? Voluptate, asperiores.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="{{asset('assets/img/home/Ellipse1.png')}}" style="margin-top: 5px;">
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nihil illum doloremque modi excepturi, voluptatem quam voluptatibus maiores harum expedita ex aut quidem est dolores vitae similique, explicabo facere quae.
                 </div>
                 <button class="btn btn-pri"><strong>Contactanos</strong></button>
                <img src="{{asset('assets/img/home/formas_fondo22.png')}}" alt="">
            </div>
        </div>
    </div>
        @endsection
