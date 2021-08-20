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

</style>
<div class="" style="background: #173138">
    <div class="texto-con">
        <strong>Contáctanos</strong>
    </div>
    <div class="texto-tiendaB d-flex">
        <p class="ml-1"><strong> Inicio </strong></p><strong class="ml-1"> > </strong><p style="color: #52CCA7" class="ml-1"><strong> Contacto </strong></p>
    </div>
    <img src="{{asset('assets/img/home/formas_fondo3.png')}}" alt="" style="width: 100%;">
</div>

<div class="container">
<div class="row d-flex">
<div class="col-md-7 mt-5 mb-5 justify-content-end">

    <div class="card p-5" style="height: 450px;background: #ffffff;">
        <form action="#" class="credit-card-div">
            <div class="panel panel-default ">
                <div class="panel-heading  ">
                    <h3><strong>Déjanos un mensaje</strong></h3>
                    <br>
                    <div class="row ">
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted text textcustom">Tu nombre</span>
                            <input type="text" class="form-control custominput" style="background:  #F6F6F7;" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted textcustom">Email</span>
                            <input type="text" class="form-control custominput" style="background:   #F6F6F7;" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted text textcustom">Nombres </span>
                            <input type="text" class="form-control custominput" style="background:  #F6F6F7;" />
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-3">
                            <span class="help-block text-muted textcustom">Apellidos</span>
                            <input type="text" class="form-control custominput" style="background:   #F6F6F7;" />
                        </div>
                    </div>

                    <br>

                    <div class="row ">
                        <div class="col-md-12 pad-adjust">
                            <span class="help-block text-muted ">Mensaje</span>
                            <textarea type="text" class="form-control custominput"
                                style="background:  #F6F6F7"></textarea>
                        </div>
                    </div>

                    <br>
                    <button class="btn btn-con mt-2"><strong> Enviar </strong></button>
                </div>
            </div>
        </form>
    </div>
    </div>
    <div class="col-5 mt-5 mb-5 d-flex">
        <div class="row d-flex justify-content-start">
            <div class="card col-md-9" style="height: 160px;background: white;">
                <img class="mx-auto d-block mb-2 mt-2" style="width: 30%;" src="{{asset('assets/img/home/contact_us1.png')}}">
                <div class="text-center text-about mb-1"><strong> info@royallife.com </strong></div>
            </div>
            <div class="card col-md-9" style="height: 160px;margin-top: -140px;background: white;">
                <img class="mx-auto d-block mb-2 mt-2" style="width: 40%;" src="{{asset('assets/img/home/contact_us2.png')}}">
                <div class="text-center text-about mb-1"><strong> (+57)1234567 </strong></div>
            </div>
        </div>
    </div>

</div>
</div>

        @endsection
