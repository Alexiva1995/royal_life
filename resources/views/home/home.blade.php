@extends('layouts.dashboard')
@section('content')  
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="contenedor carousel-item active">
            <div class="texto-encima d-flex justify-content-center">
           <p style=" line-height: 3.5rem;">Tellus nibh <strong> mattis <br> ultricies</strong> phasellus</p>
            </div>
            <div class="centrado d-flex justify-content-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sit ipsa quod, aut quo inventore dolore? Est quisquam, doloremque odit deleniti veritatis consectetur. Dolor debitis cumque, consequuntur voluptatibus provident molestias.</p>
            </div>
            <button class="btn btn-pry"><strong>ir a la tienda</strong></button>
             <img src="{{asset('assets/img/home/Polygon5.png')}}" alt="" class="debajo">
            <img src="{{asset('assets/img/home/producto1.png')}}" alt="" class="sobre">
           
          <img class="d-block w-100" data-src="holder.js/900x300?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [900x300]" src="{{asset('assets/img/home/formas_fondo1.png')}}" data-holder-rendered="true">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
  </div>
  
  <div class="container">
      <div class="row">
        <div class="card">
            <img class="card-img-top" src="/images/pathToYourImage.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">
                Some quick example text to build on the card title
                and make up the bulk of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          
      </div>
  </div>
@endsection