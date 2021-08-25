@extends('backofice.layouts.dashboard')

@section('content')
<style>
    .custominput{
    border: 0;
}

.textcustom{
font-style: normal;
font-weight: normal;
font-size: 15px;
line-height: 18px;

color: #303030;
}

.factura {
  table-layout: fixed;
}

.fact-info > div > h5 {
  font-weight: bold;
}

.factura > thead {
  border-top: solid 3px #000;
  border-bottom: 3px solid #000;
}

.factura > thead > tr > th:nth-child(2), .factura > tbod > tr > td:nth-child(2) {
  width: 300px;
}

.factura > thead > tr > th:nth-child(n+3) {
  text-align: right;
}

.factura > tbody > tr > td:nth-child(n+3) {
  text-align: right;
}

.factura > tfoot > tr > th, .factura > tfoot > tr > th:nth-child(n+3) {
  font-size: 24px;
  text-align: right;
}

.cond {
  border-top: solid 2px #000;
}


.cheking{
    position: relative;
    padding-left: 100px;

}
.hr{
    position: absolute;
    margin-top: 150px;
    width:100%;
}

.container {
        display: flex;
      }
 
.btn-custom{
    width: 188px;
    height: 40px;
    left: 100px;
    background: #67FFCC;
    border-radius: 10px;
}
input[type=text]:hover:not([disabled]), input[type=text]:focus, input[type=textarea]:hover:not([disabled]), input[type=textarea]:focus, input[type=search], input[type=search]:focus, input[type=search]:active, input[type=text]:read-only, input[type=password]:hover:not([disabled]), input[type=password]:focus, label:hover ~ input[type=text], label:hover ~ input[type=password] {
    background: #11262C;
    color: #000000;
}
.requerido{
  color:red;
    margin-left: 1px;
    top:-1px;
    font-size: 15px;
}
</style>
<div class="img-head">
    <div class="texto-con">
        <strong>Contáctanos</strong>
    </div>
    <div class="texto-conB d-flex">
        <a class="ml-1 text-white" href="{{route('inicio')}}"><strong> Inicio </strong></a><strong class="ml-1"> > </strong><p style="color: #52CCA7" class="ml-1"><strong> Contacto </strong></p>
    </div>
    <img src="{{asset('assets/img/home/formas_fondo3.png')}}" alt="" style="height: 200px;width: 100%;">
</div>

<div class="container">
<div class="row d-flex">
<div class="col-md-7 mt-5 mb-5 justify-content-end" style="margin-left: 15%;">

    <div class="card p-5" style="height: 450px;background: #ffffff;">
        <form action={{route('contact')}} method="POST" class="credit-card-div">
            {{ csrf_field() }}
            <div class="panel panel-default ">
                <div class="panel-heading  ">
                    <h3><strong>Déjanos un mensaje</strong></h3>
                    <br>
                    <div class="row ">
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted text textcustom">Tu nombre <sup class="requerido">*</sup></span>
                            <input name="name" type="text" class="form-control custominput" style="background:  #F6F6F7;" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted textcustom">Email <sup class="requerido">*</sup></span>
                            <input type="text" name="email" class="form-control custominput" style="background:   #F6F6F7;" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted text textcustom">Telefono </span>
                            <input type="text" name="telefono" class="form-control custominput" style="background:  #F6F6F7;" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted textcustom">Asunto</span>
                            <input type="text" name="asunto" class="form-control custominput" style="background:   #F6F6F7;" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-md-12 pad-adjust">
                            <span class="help-block text-muted text textcustom">Mensaje</span>
                            <textarea name="mensaje" type="text" class="form-control custominput"
                                style="background:  #F6F6F7; color: black;"></textarea>
                        </div>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-con mt-2"><strong> Enviar </strong></button>
                </div>
            </div>
        </form>
    </div>
    </div>
    <div class="col-3 mt-5 mb-5 d-flex">
        <div class="row d-flex justify-content-start">
            <div class="card col-md-12" style="height: 160px;background: white;">
                <img class="mx-auto d-block mb-2 mt-2" style="width: 30%;" src="{{asset('assets/img/home/contact_us1.png')}}">
                <div class="text-center text-about mb-1"><strong> info@royallife.com </strong></div>
            </div>
            <div class="card col-md-12" style="height: 160px;margin-top: -140px;background: white;">
                <img class="mx-auto d-block mb-2 mt-2" style="width: 40%;" src="{{asset('assets/img/home/contact_us2.png')}}">
                <div class="text-center text-about mb-1"><strong> (+57)1234567 </strong></div>
            </div>
        </div>
    </div>

</div>
</div>

@endsection
