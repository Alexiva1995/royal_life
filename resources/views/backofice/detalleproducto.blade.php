@extends('backofice.layouts.dashboard')

@push('vendor_css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
@endpush

@push('page_vendor_js')
<script src="{{asset('assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('assets/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
@endpush

@section('content')
<body>
@include('backofice.ui.estylos')

    <!-- Product Detail Start -->
    <div class="product-detail mt-5 ml-5 fuente">
        <div class="container-fluid">
            <div class="row ml-2 mt-2">
                <div class="col-lg-8">
                    <div class="product-detail-top">
                        <div class="row align-items-center">
                            <div class="col-md-5 ">
                                <div class="fondoProducto  product-slider-single normal-slider text-center ">
                                    <img class="o" src="{{asset('assets/img/home/producto21.png')}}" alt="Product Image">

                                </div>
                                <div class="product-slider-single-nav normal-slider">

                                </div>
                            </div>
                            <div class="col-md-7 mt-2">
                                <div class="product-content card" style="background:#FFFFFF">
                                    <div class="title ml-3  mt-1 fuente"> <h2><strong>Product Name</strong></h2></div>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="price ml-3">
                                        <h4>Price:</h4>
                                        <p class="text-dark ">$99 <span>$149</span></p>
                                    </div>
                                    <div class="quantity ml-3">
                                        <h4>Quantity:</h4>
                                        <div class="sumador ml-2">
                                            <button class="Rangoprecio shadow"><i class="fa fa-minus"></i></button>
                                            <input class="sinborde shadow text-center" type="" value="1">
                                            <button class="Rangoprecio mr-3 shadow"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>


                                    <div class="action">
                                        <a class="btn text-dark btn-custom mt-2 ml-3 mb-2" href="{{route('cheking.backofice')}}"><i class="fa fa-shopping-cart text-dark"></i> Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row product-detail-bottom">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                </li>

                            </ul>

                            <div class="tab-content">
                                <div id="description " class=" card fuente "  style="background:#FFFFFF">
                                    <h4 class="mt-2"> <strong class=" ml-3 mt-3"> Product description </strong> </h4>
                                    <p class="text-dark mb-2 ml-3 mr-3">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        In condimentum quam ac mi viverra dictum. In efficitur ipsum diam,
                                        at dignissim lorem tempor in. Vivamus tempor hendrerit finibus. Nulla
                                        tristique viverra nisl, sit amet bibendum ante suscipit non. Praesent in
                                        faucibus tellus, sed gravida lacus. Vivamus eu diam eros. Aliquam et sapien
                                        eget arcu rhoncus scelerisque. Suspendisse sit amet neque neque. Praesent
                                        suscipit et magna eu iaculis. Donec arcu libero, commodo ac est a, malesuada
                                        finibus dolor. Aenean in ex eu velit semper fermentum. In leo dui, aliquet sit
                                        amet eleifend sit amet, varius in turpis. Maecenas fermentum ut ligula at
                                        consectetur. Nullam et tortor leo.
                                    </p>
                                </div>

                                <div id="reviews" class="container tab-pane fade">
                                    <div class="reviews-submitted">
                                        <div class="reviewer">Phasellus Gravida - <span>01 Jan 2020</span></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product">
                        <div class="section-header">
                            <h1 class="ml-2 mt-2"><strong class=""> Related Products </strong></h1>
                        </div>

                        <div class="row align-items-center product-slider product-slider-3">
                            <div class="col-lg-3">
                                <div class="product-item mt-2 ml-2">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-10.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-8.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-6.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-4.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Product Name</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-2.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Bar Start -->
                <div class="col-lg-4 sidebar ">
                    <div class="  " style="background:#ffffff">
                        <div class="card-content tarjeta2">
                            <div class="card-body card-group  ">

                               <div class=" d-fex col-md-8 mr-5">
                                <div class="row d-flex justify-content-start mt-5">
                                    <div class="card col-12 tarjeta tarjeta3 ml-2 mt-1" style="background:#FFFFFF" >
                                        <div class="card-body">
                                        <h6> <strong class="fuente"> Categorias </strong></h6>
                                        <hr class="hr">
                                        @foreach ( $categorias as $categories )

                                        <div class="form-check">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   value="{{$categories->id}}"
                                                   id="flexCheckDefault">

                                            <label class="form-check-label mb-2"
                                                   for="flexCheckDefault"
                                                   style="">
                                                   <a class="s " href="{{ route('categorias.show', ['Categories' => $categories->id ]) }}">
                                            <strong>  {{ ucfirst($categories->name) }} </strong>
                                                 </a>

                                            </label>
                                          </div>
                                          @endforeach
                                 </div>
                                 </div>
                    </div>
                <!-- Side Bar End -->
            </div>
        </div>
    </div>
    <!-- Product Detail End -->

    <!-- Brand Start -->
    <div class="brand">
        <div class="container-fluid">
            <div class="brand-slider">
                <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
            </div>
        </div>
    </div>

</body>
@endsection

