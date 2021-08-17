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
                        </div>
                    </div>
                </div>
                    <div class="container d-fex col-md-8">
                     <div class="row d-flex justify-content-end mt-5">
                        @foreach ($packages as $items)
                        <div class="col-md-6">
                            
                            <div class="col-md-12 ">
                               
                                <div class="card text-center zoom" style="background:#FFFFFF">
                                        <p class=" text-center  " style= "background: #67FFCC;  ">
                                            <img class=" text-center " src="{{asset('storage/photo-profile/'.$items->img)}}"   width="150" height="150" >
                                        </p>
                                    <div class="card-body">
                                        <form action="{{route('shop.procces')}}" method="POST" target="_blank" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="idproduct" value="{{$items->id}}">
                                        <input type="hidden" name="categories_id" value="">
                                        <p class="text-right" style="color: rgb(0, 0, 0);"> <strong> ${{$items->price}}</strong></p>
                                        <p class="text-left"  style="color:  #000000;"><strong>{{$items->name}}</strong></p>
                                        <p style="color:  #303030;">{{ Str::words( strip_tags($items->description) , 15 )}}</p>


                                      {{--  <button class="btn btn-block " type="submit" style="background: #cb9b32;" @if($invertido >= $items->price) disabled @endif>
                                            @if($invertido == null)
                                                Comprar
                                            @else
                                                Upgrade
                                            @endif
                                        </button>

                                     --}}

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
