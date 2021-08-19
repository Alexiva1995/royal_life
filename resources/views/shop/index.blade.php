@extends('layouts.dashboard')

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
@endpush

@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
@endpush

@push('custom_css')
<style>
.zoom:hover {
    -webkit-transform:scale(1.05);
    -moz-transform:scale(1.05);
    -ms-transform:scale(1.05);
    -o-transform:scale(1.05);
    transform:scale(1.05);

    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    -ms-transition:all 0.3s ease;
    width:100%;
}

</style>
@endpush

@section('content')
<div id="adminServices" >
    <div class="">
     <div class="col-12 ">

        <div class="" style="background:#E5E5E5">
            <div class="card-content ">
                <div class="card-body card-group mt-12 ">
                   <h1 class="text-white">Tienda</h1>
                   <div class=" d-fex col-md-3">
                    <div class="row d-flex justify-content-start mt-5">
                        <div class="card col-12" style="background:#FFFFFF" >
                            <h6> <strong> categorias </strong></h6>

                           @foreach ( $categorias as $categoria )

                            <div class="form-check">
                                <input class="form-check-input"
                                       type="checkbox"
                                       value="{{$categoria->id}}"
                                       id="flexCheckDefault">

                                <label class="form-check-label"
                                       for="flexCheckDefault"
                                       style="color:  #303030;">
                                       <a class="nav-link" href="{{ route('categorias.show', ['Categories' => $categoria->id ]) }}">
                                        {{ $categoria->name }}
                                     </a>
                                </label>
                              </div>
                              @endforeach
                            </div>
                     </div>
                     </div>
                    <div class="container d-fex col-md-6">
                     <div class="row d-flex justify-content-end mt-5">
                        @foreach ($packages as $producto )

                        @include('ui.productos')



                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
