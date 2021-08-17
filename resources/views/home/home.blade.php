@extends('layouts.dashboard')
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
        <div style="background:#F0FFFA; ">
            <div class="text-center">
                <h1 class="texto-title"><strong>Los más vendidos</strong></h1>
                <p class="texto-simple">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab doloribus vitae
                    provident, cumque voluptatum nemo libero quod esse repudiandae repellat distinctio at porro nisi?
                    Dignissimos corrupti in ullam inventore dolor?</p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="card col-4" style="background: white;">
                        <div class="d-flex">
                            <img src="{{asset('assets/img/home/producto21.png')}}" alt="">
                        </div>
                        <div class="">
                            <h4 class="card-title">Card title</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>


                            <p class="card-text" style="color: black;">
                                Some quick example text to build on the card title
                                and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection
