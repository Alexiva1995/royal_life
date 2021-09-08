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
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap');

    .custominput {
        border: 0;
    }




    .cheking {
        position: relative;
        padding-left: -400px;

    }

    .hr {
        position: absolute;
        width: 100%;
    }

    .container {
        display: flex;
    }

    .btn-custom {
        width: 220px;
        height: 45px;
        left: 215px;
        background: #67FFCC;
        border-radius: 7px;
    }

    .fuente {
        font-family: 'Montserrat', sans-serif;
        font-style: normal;

    }

    .tamañofuente {
        font-size: 15px;
    }

    .orden {
        position: relative;
        margin-top: -19px;
    }

    .requerido {
        color: red;
        margin-left: 1px;
        top: -1px;
        font-size: 15px;
    }

    .button {
        z-index: 10;
    }

</style>
@endpush


@section('content')

<div class="img-head">
    <div class="texto-tienda">
        <strong>Checkout</strong>
    </div>
    <div class="texto-tiendaB d-flex">
        <a class="ml-1 text-white" href="{{route('shop.backofice')}}"><strong> Producto </strong></a><strong class="ml-1"> > </strong>
        <p style="color: #52CCA7" class="ml-1"><strong>Checkout</strong></p>
    </div>
    <img src="{{asset('assets/img/home/formas_fondo3.png')}}" alt="" style="height: 200px;width: 100%;">

</div>


<div class="mt-5 ml-10 pb-5 container ">
    <form method="POST" action="{{route('orden')}}" class="credit-card-div fuente">
        @csrf
    <div class="row d-flex">
    <div class="col-5  ml-5 " style="background: #ffffff;">
        
            <div class="panel panel-default ">
                <div class="panel-heading  ">
                    <h2> <strong>Detalles de facturacion </strong> </h2>

                    <br>
                    <div class="row ">
                        <div class="col-md-6 col-sm-6 col-xs-3 form-group">
                            <span class="help-block text-muted text textcustom  control-span">Nombres<sup
                                    class="requerido">*</sup>
                            </span>
                            <input name="name" type="text" class="form-control custominput text-dark mt-1"
                                style="background:  #F6F6F7;" value="{{$user->name}}" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted textcustom mb-1">Apellidos <sup
                                    class="requerido">*</sup></span>
                            <input name="lastname" type="text" class="form-control custominput  text-dark mt-1"
                                style="background:   #F6F6F7;" value="{{$user->last_name}}" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-md-12 pad-adjust">
                            <span class="help-block text-muted ">Pais<sup class="requerido">*</sup></span>
                            <input name="country" type="text" class="form-control custominput  text-dark mt-1"
                                style="background:  #F6F6F7" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-md-12 pad-adjust">
                            <span class="help-block text-muted ">Direccion<sup class="requerido">*</sup></span>
                            <input name="address" type="text" class="form-control custominput  text-dark mt-1"
                                style="background:  #F6F6F7" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-md-12 pad-adjust">
                            <span class="help-block text-muted ">Pueblo/Ciudad<sup class="requerido">*</sup></span>
                            <input name="city" type="text" class="form-control custominput  text-dark mt-1"
                                style="background:  #F6F6F7" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-md-12 pad-adjust">
                            <span class="help-block text-muted ">Estado<sup class="requerido">*</sup></span>
                            <input name="state" type="text" class="form-control custominput  text-dark mt-1"
                                style="background:  #F6F6F7" />
                        </div>
                    </div>


                    <br>

                    <div class="row ">
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted ">Email<sup class="requerido">*</sup></span>
                            <input name="email" type="text" class="form-control custominput  text-dark mt-1"
                                style="background:  #F6F6F7;" value="{{$user->email}}"/>
                        </div>

                        <br>

                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted ">Telefono<sup class="requerido">*</sup></span>
                            <input name="phone" type="text" class="form-control custominput  text-dark mt-1"
                                style="background:   #F6F6F7;" value="{{$user->whatsapp}}" />
                        </div>
                    </div>
                </div>
            </div>
    </div>
    

    <div class="mt-2 ml-5 mb-5 cheking fuente col-5">
        <div class="col-10  ml-5 text-dark ">
            <div class="row orden">
                <table class="table table-borderless factura">
                    <tr>
                        <h2 class="ml-1 "><strong>Tu orden <strong></h2>
                        <th class=""><strong class="tamañofuente">Productos </strong></th>
                        <th></th>
                        <th></th>
                        <th class="text-right "><strong class="tamañofuente">Subtotal</strong></th>
                    </tr>
                    <tbody>
                        <tr>
                        </tr>
                        @foreach ($products as $item)
                        <tr>

                            <td>
                                <h6>{{$item->getPackage->name}}</h6>
                            </td>
                            <td></td>
                            <td></td>
                            <td class="text-right">${{$item->getPackage->price}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                    <tr>
                        <th><strong class="tamañofuente"> Subtotal </strong></th>
                        <th></th>
                        <th></th>
                        <th class="text-right"> <strong class="tamañofuente">${{$suma}}</strong></th>
                    </tr>
                    <tr>
                        <th class="text-left">
                            <h6><strong>Iva </strong></h6>
                        </th>
                        <th></th>
                        <th></th>
                        <th class="text-right ">
                            <h6><strong>15%<strong></h6>
                        </th>
                    </tr>
                    <tfoot>
                        <tr>
                            <th class="text-left">
                                <h6><strong>Total + Iva </strong></h6>
                            </th>
                            <th></th>
                            <th></th>
                            <th class="text-right ">
                                <h6><strong>${{($suma+(15/100)*$suma)}}<strong></h6>
                            </th>
                        </tr>

                    </tfoot>

                </table>
                <hr class="hr">
                <div class="form-group mt-5 mt-5 btn btn-custom text-dark button">
                    <input class=" custominput" value="Realizar pedido" type="submit" style="background: #67FFCC">
                </div>
            </div>
        </div>
    </div>

</div>
</form>
</div>





    @endsection
