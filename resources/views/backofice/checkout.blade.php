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
    padding-left: 500px;
    padding-top: -1000px;
}
</style>
@endpush


@section('content')

<div class="" style="background: #173138">
    <div class="texto-tienda">
        <strong>Checkout</strong>
     </div>
     <div class="texto-tiendaB">
       <p>Inicio <strong> > </strong>Tienda</p>
     </div>
    <img src="{{asset('assets/img/home/formas_fondo3.png')}}" alt=""  style="width: 100%; ">

</div>


<div class="mt-5 ml-5 mb-5">

<div class="col-5  ml-5 " style="background: #ffffff;">
<form action="#" class="credit-card-div">
    <div class="panel panel-default ml-5" >
     <div class="panel-heading  ml-5">
        <h2> <strong>Detalles de facturacion </strong> </h2>

<br>
         <div class="row ">
                  <div class="col-md-6 col-sm-6 col-xs-3">
                      <span class="help-block text-muted text textcustom" >Nombres  </span>
                      <input type="text" class="form-control custominput" style="background:  #F6F6F7;" />
                  </div>
             <div class="col-md-6 col-sm-6 col-xs-3">
                      <span class="help-block text-muted textcustom" >Apellidos</span>
                      <input type="text" class="form-control custominput" style="background:   #F6F6F7;"/>
                  </div>
              </div>

              <br>

         <div class="row ">
                  <div class="col-md-12 pad-adjust">
                    <span class="help-block text-muted " >Pais</span>
                      <input type="text" class="form-control custominput" style="background:  #F6F6F7" />
                  </div>
              </div>

              <br>

              <div class="row ">
                <div class="col-md-12 pad-adjust">
                    <span class="help-block text-muted " >Direccion</span>
                    <input type="text" class="form-control custominput" style="background:  #F6F6F7" />
                </div>
            </div>

            <br>

            <div class="row ">
                <div class="col-md-12 pad-adjust">
                    <span class="help-block text-muted " >Pueblo/Ciudad</span>
                    <input type="text" class="form-control custominput" style="background:  #F6F6F7" />
                </div>
            </div>

            <br>

            <div class="row ">
                <div class="col-md-12 pad-adjust">
                    <span class="help-block text-muted " >Estado</span>
                    <input type="text" class="form-control custominput" style="background:  #F6F6F7" />
                </div>
            </div>


            <br>

            <div class="row ">
                <div class="col-md-6 col-sm-6 col-xs-3">
                    <span class="help-block text-muted " >Email</span>
                    <input type="text" class="form-control custominput" style="background:  #F6F6F7;" />
                </div>

                <br>

           <div class="col-md-6 col-sm-6 col-xs-3">
                    <span class="help-block text-muted " >Telefono</span>
                    <input type="text" class="form-control custominput" style="background:   #F6F6F7;"/>
                </div>
            </div>
         </div>

                       </div>
                  </div>
    </form>

<div>

<div>


<div class="mt-2 ml-5 mb-5 cheking">
        <div class="col-4  ml-5 text-dark " >

            <h2>Tu orden</h2>
    <div class="row my-5">
      <table class="table table-borderless factura">

          <tr>
            <th>Productos</th>
            <th></th>
            <th>Subtotal</th>
            <th></th>
          </tr>

        <tbody>
          <tr>
          </tr>
          <tr>
            <td>Crema chocolate</td>
            <td></td>
            <td></td>
            <td>$31</td>
          </tr>
        </tbody>
          <tr>
            <th>Subtotal</th>
            <th></th>
            <th></th>
            <th>$31</th>
          </tr>
          <tfoot>
          <tr>
            <th>Total</th>
            <th></th>
            <th></th>
            <th>$31</th>
          </tr>
        </tfoot>
      </table>
    </div>

</div>

        </div>
</div>

@endsection
