@extends('backofice.layouts.dashboard')
@section('content')
<div class="carousel-inner" role="listbox">
    <img class="d-block w-100" src="{{asset('assets/img/home/formas_fondo1.png')}}"style="background: #F2F4F4;">
        <div class="container carousel-caption d-flex justify-content-start" style="top: 250px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-left">
                        <h1 style="font-size: 55px;">Tellus nibh <strong> mattis <br> ultricies</strong> phasellus</h1>  
                        <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat, semper ac facilisi gravida velit consequat, tempor, volutpat. Libero, diam tellus ut sed nec sed sem tortor volutpat. Cras a ornare nisi auctor tellus tortor, mattis. Nisl arcu sit massa at faucibus eros tincidunt.</p>
                        <a href="{{route('shop.backofice')}}" class="btn btn-primario"><strong>ir a la tienda</strong></a>
          </div>
        </div>
        <div class="col-md-6" >
            <img src="{{asset('assets/img/home/Polygon5.png')}}" alt="" class="carousel-caption d-flex justify-content-center"  style="top:-240px;left: -45px;">
            <img src="{{asset('assets/img/home/producto1.png')}}" alt="" class="carousel-caption d-flex justify-content-center"  style="top: -180px;left: -110px;">
</div>
</div>
</div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
    <div class="text-center">
        <h1 class="texto-title mb-2"><strong> Categorias de nuetros productos </strong></h1>
    </div>
</div>
</div>
    <div class="contaniner">
        <div class="row d-flex justify-content-center">
    <div class="col-6">
        <p class="text-center text-dark mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tellus pharetra amet
            nunc sed etiam nibh et, morbi. Morbi commodo lorem purus non dui.</p>
    </div>
</div>
</div>


<div class="container">
    <div class="row d-flex justify-content-center">
            <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                <div class="text-center text-card"><strong>Cremas</strong></div>
                <a class="text-center" style="color: #303030;" href="{{route('shop.backofice')}}"> ver todos
                        los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt="" style="margin-left: 10px;"></a>
            </div>
            <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                <div class="text-center text-card"><strong>Cremas</strong></div>
                <a class="text-center" style="color: #303030;" href="{{route('shop.backofice')}}"> ver todos
                        los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt="" style="margin-left: 10px;"></a>
            </div>
            <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                <div class="text-center text-card"><strong>Cremas</strong></div>
                <a class="text-center" style="color: #303030;" href="{{route('shop.backofice')}}"> ver todos
                        los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt="" style="margin-left: 10px;"></a>
            </div>
            <div class="card mb-1 col-md-3 ml-md-1" style="height: 350px;background: white;">
                <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}" alt="" height="70%">
                <div class="text-center text-card"><strong>Cremas</strong></div>
                <a class="text-center" style="color: #303030;" href="{{route('shop.backofice')}}"> ver todos
                        los productos<img src="{{asset('assets/img/home/Arrow1.png')}}" alt="" style="margin-left: 10px;"></a>
            </div>
    </div>
</div>
@endsection