@extends('backofice.layouts.dashboard')
@section('content')
<div class="carousel-inner">
    <img class="d-block w-100 fuente" src="{{asset('assets/img/home/formas_fondo3.png')}}" style="background: #173138;">
    <div class="container carousel-caption d-flex justify-content-start" style="top:90px;left: 7%;">
        <div class="row">
            <div class="col-md-12">

                <div class="text-left">
                    <h3 class="text-white ml-4" style="font-size: 50px;"><strong> Preguntas Frecuentes </strong></h3>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-4 bg-white mr-1">
            <div class="card bg-white">
                <div class="card-body">
            <h2 class="">Lista de preguntas</h2>
            <li><a href="#1" class="text-dark">¿Por que registrarse?</a></li>
            <li><a href="#2" class="text-dark">¿Carrito de compras?</a></li>
            <li><a href="#3" class="text-dark">¿Metodos de pago?</a></li>
            <li><a href="#4" class="text-dark">¿Productos?</a></li>
            <li><a href="#5" class="text-dark">¿Tienda?</a></li>
            <li><a href="#6" class="text-dark">¿Contactanos?</a></li>
        </div>
    </div>
    </div>
    <div class="col-7 bg-white">
        <h1 class="texto-title mb-1" id="1"><strong>Por que registrarse</strong></h1>
            <p class="texto-aboutS">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et tortor, scelerisque convallis aliquam facilisis nulla. Gravida cursus habitant id pellentesque amet leo massa. Egestas odio orci facilisis diam ultrices lorem enim feugiat. Lobortis et orci enim nec habitasse etiam urna ullamcorper urna. Non, in mauris commodo quis. Leo, quis varius phasellus in diam. Rhoncus, orci, a, in ut id elit. Quis adipiscing et tellus ac vel. Ridiculus tincidunt feugiat sed est lacus, varius scelerisque pharetra. Suspendisse sagittis nulla eu eu interdum cursus viverra. Ullamcorper elementum aliquet ac blandit blandit placerat.
            Rhoncus in massa, dui id dictum sem amet lorem. Massa massa nisl laoreet ornare. Non mattis enim, dignissim ut vitae viverra faucibus enim. Rhoncus duis ullamcorper nibh dui consequat id. Erat dictum convallis viverra cursus.
            Ut urna, vitae eu a consectetur porttitor quis turpis. Mauris facilisis morbi nec velit. Elit sed diam urna placerat mauris ultrices tempor. Volutpat tempor nisi, sollicitudin mi morbi augue eget. Quis id a, mi malesuada. Aliquam maecenas eget neque in morbi et aenean in. Orci justo cursus.</p>

            <h1 class="texto-title mb-1" id="2"><strong>Carrito de compras</strong></h1>
            <p class="texto-aboutS">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et tortor, scelerisque convallis aliquam facilisis nulla. Gravida cursus habitant id pellentesque amet leo massa. Egestas odio orci facilisis diam ultrices lorem enim feugiat. Lobortis et orci enim nec habitasse etiam urna ullamcorper urna. Non, in mauris commodo quis. Leo, quis varius phasellus in diam. Rhoncus, orci, a, in ut id elit. Quis adipiscing et tellus ac vel. Ridiculus tincidunt feugiat sed est lacus, varius scelerisque pharetra. Suspendisse sagittis nulla eu eu interdum cursus viverra. Ullamcorper elementum aliquet ac blandit blandit placerat.
            Rhoncus in massa, dui id dictum sem amet lorem. Massa massa nisl laoreet ornare. Non mattis enim, dignissim ut vitae viverra faucibus enim. Rhoncus duis ullamcorper nibh dui consequat id. Erat dictum convallis viverra cursus.
            Ut urna, vitae eu a consectetur porttitor quis turpis. Mauris facilisis morbi nec velit. Elit sed diam urna placerat mauris ultrices tempor. Volutpat tempor nisi, sollicitudin mi morbi augue eget. Quis id a, mi malesuada. Aliquam maecenas eget neque in morbi et aenean in. Orci justo cursus.</p>

            <h1 class="texto-title mb-1" id="3"><strong>Metodos de pago</strong></h1>
            <p class="texto-aboutS">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et tortor, scelerisque convallis aliquam facilisis nulla. Gravida cursus habitant id pellentesque amet leo massa. Egestas odio orci facilisis diam ultrices lorem enim feugiat. Lobortis et orci enim nec habitasse etiam urna ullamcorper urna. Non, in mauris commodo quis. Leo, quis varius phasellus in diam. Rhoncus, orci, a, in ut id elit. Quis adipiscing et tellus ac vel. Ridiculus tincidunt feugiat sed est lacus, varius scelerisque pharetra. Suspendisse sagittis nulla eu eu interdum cursus viverra. Ullamcorper elementum aliquet ac blandit blandit placerat.
            Rhoncus in massa, dui id dictum sem amet lorem. Massa massa nisl laoreet ornare. Non mattis enim, dignissim ut vitae viverra faucibus enim. Rhoncus duis ullamcorper nibh dui consequat id. Erat dictum convallis viverra cursus.
            Ut urna, vitae eu a consectetur porttitor quis turpis. Mauris facilisis morbi nec velit. Elit sed diam urna placerat mauris ultrices tempor. Volutpat tempor nisi, sollicitudin mi morbi augue eget. Quis id a, mi malesuada. Aliquam maecenas eget neque in morbi et aenean in. Orci justo cursus.</p>
            
            <h1 class="texto-title mb-1" id="4"><strong>Productos</strong></h1>
            <p class="texto-aboutS">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et tortor, scelerisque convallis aliquam facilisis nulla. Gravida cursus habitant id pellentesque amet leo massa. Egestas odio orci facilisis diam ultrices lorem enim feugiat. Lobortis et orci enim nec habitasse etiam urna ullamcorper urna. Non, in mauris commodo quis. Leo, quis varius phasellus in diam. Rhoncus, orci, a, in ut id elit. Quis adipiscing et tellus ac vel. Ridiculus tincidunt feugiat sed est lacus, varius scelerisque pharetra. Suspendisse sagittis nulla eu eu interdum cursus viverra. Ullamcorper elementum aliquet ac blandit blandit placerat.
            Rhoncus in massa, dui id dictum sem amet lorem. Massa massa nisl laoreet ornare. Non mattis enim, dignissim ut vitae viverra faucibus enim. Rhoncus duis ullamcorper nibh dui consequat id. Erat dictum convallis viverra cursus.
            Ut urna, vitae eu a consectetur porttitor quis turpis. Mauris facilisis morbi nec velit. Elit sed diam urna placerat mauris ultrices tempor. Volutpat tempor nisi, sollicitudin mi morbi augue eget. Quis id a, mi malesuada. Aliquam maecenas eget neque in morbi et aenean in. Orci justo cursus.</p>
            
            <h1 class="texto-title mb-1" id="5"><strong>Tienda</strong></h1>
            <p class="texto-aboutS">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et tortor, scelerisque convallis aliquam facilisis nulla. Gravida cursus habitant id pellentesque amet leo massa. Egestas odio orci facilisis diam ultrices lorem enim feugiat. Lobortis et orci enim nec habitasse etiam urna ullamcorper urna. Non, in mauris commodo quis. Leo, quis varius phasellus in diam. Rhoncus, orci, a, in ut id elit. Quis adipiscing et tellus ac vel. Ridiculus tincidunt feugiat sed est lacus, varius scelerisque pharetra. Suspendisse sagittis nulla eu eu interdum cursus viverra. Ullamcorper elementum aliquet ac blandit blandit placerat.
            Rhoncus in massa, dui id dictum sem amet lorem. Massa massa nisl laoreet ornare. Non mattis enim, dignissim ut vitae viverra faucibus enim. Rhoncus duis ullamcorper nibh dui consequat id. Erat dictum convallis viverra cursus.
            Ut urna, vitae eu a consectetur porttitor quis turpis. Mauris facilisis morbi nec velit. Elit sed diam urna placerat mauris ultrices tempor. Volutpat tempor nisi, sollicitudin mi morbi augue eget. Quis id a, mi malesuada. Aliquam maecenas eget neque in morbi et aenean in. Orci justo cursus.</p>
            
            <h1 class="texto-title mb-1" id="6"><strong>Contactanos</strong></h1>
            <p class="texto-aboutS pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et tortor, scelerisque convallis aliquam facilisis nulla. Gravida cursus habitant id pellentesque amet leo massa. Egestas odio orci facilisis diam ultrices lorem enim feugiat. Lobortis et orci enim nec habitasse etiam urna ullamcorper urna. Non, in mauris commodo quis. Leo, quis varius phasellus in diam. Rhoncus, orci, a, in ut id elit. Quis adipiscing et tellus ac vel. Ridiculus tincidunt feugiat sed est lacus, varius scelerisque pharetra. Suspendisse sagittis nulla eu eu interdum cursus viverra. Ullamcorper elementum aliquet ac blandit blandit placerat.
            Rhoncus in massa, dui id dictum sem amet lorem. Massa massa nisl laoreet ornare. Non mattis enim, dignissim ut vitae viverra faucibus enim. Rhoncus duis ullamcorper nibh dui consequat id. Erat dictum convallis viverra cursus.
            Ut urna, vitae eu a consectetur porttitor quis turpis. Mauris facilisis morbi nec velit. Elit sed diam urna placerat mauris ultrices tempor. Volutpat tempor nisi, sollicitudin mi morbi augue eget. Quis id a, mi malesuada. Aliquam maecenas eget neque in morbi et aenean in. Orci justo cursus.</p>
        </div>
        
    </div>
</div>


@endsection
