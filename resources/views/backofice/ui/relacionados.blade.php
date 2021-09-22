@foreach ($relacionados as $producto )
<div class="col-sm-4 mb-5">

    <div class="card zoom3 shadow-sm " style="width: 18rem; background: rgb(255, 255, 255);">
        <div class="row">
        <div class="col-sm-4 ">

            <div style="background:#66FFCC; top: -10px; width: 100px; left: 10px; border-radius: 10px; position: relative;">
                <a class="background "
                href="{{action('TiendaController@detalleproducto', ['producto' => $producto->id ])}}">

    @if($producto->img == null)
            <img class="mt-2 mx-auto d-block  img-fluid"
             src="{{asset('assets/img/home/producto21.png')}}"
             alt="Product Image"
             style=""
            >
     @else
           <img class=" mt-3 mx-auto  d-block  img-fluid  "
                src="{{ asset('storage/photo-producto/'.$producto->img) }}"
                alt="Product Image"
                style="width: 10rem; ">
     @endif
                </a>
            </div>
        </div>
        <div class="col-sm-8">
        <div class="card-body" >
            <h5><strong>{{$producto->name}}</strong></h5>
            <p class="blok card-text " style="color: #303030; ">
                {{ Str::words( strip_tags($producto->description) , 9 )}}</p>
                <a href="" class="btn btn-cre">
                    <p class="text-center" style="margin-top: -9px; margin-left: -38px; width: 100px;">{{ ucfirst($producto->getCategories->categories_name)}}</p>
                </a>
            <p class=" blok text-right" style="color: #303030; font-size: 20px; float: right;">
                <strong>${{$producto->price}}</strong></p>
        </div>
        </div>
      </div>
    </div>
  </div>

    @endforeach

