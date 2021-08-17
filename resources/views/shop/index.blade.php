@extends('layouts.dashboard')

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
@endpush

@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
@endpush


@section('content')
<div id="adminServices" >
    <div class="col-12">
        <div class="" style="background:#E5E5E5">
            <div class="card-content">
                <div class="card-body card-dashboard">
                   <h1 class="text-white">Tienda</h1>
                    <div class="row">
                        @foreach ($packages as $items)
                            <div class="col col-md-4">
                                <div class="card text-center" style="background:#FFFFFF">
                                    <div class="card-body">

                                            <img class="" src="{{ asset('storage/photo-profile/'.$items->img)}}"   width="130" height="130">

                                        <form action="{{route('shop.procces')}}" method="POST" target="_blank" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="idproduct" value="{{$items->id}}">
                                        <input type="hidden" name="categories_id" value="">
                                        <p style="color: rgb(0, 0, 0);">{{$items->description}}</p>
                                        <button class="btn btn-block " type="submit" style="background: #cb9b32;" @if($invertido >= $items->price) disabled @endif>
                                            @if($invertido == null)
                                                Comprar
                                            @else
                                                Upgrade
                                            @endif
                                        </button>
                                        </form>
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
@endsection
