<div class="ml-3  d-fex col-md-8 " >
    <div class="row d-flex justify-content-end mt-5">
       @foreach ($packages as $producto )
       <div class="row col-md-6 col-xs-3 ">
           <div class="col-md-12 col-xs-3 " >
            <a class="card-body ">

               <div class="card zoom" style="background:#FFFFFF;">
                       <a class="text-center bdr bar  "
                       style="background: #67FFCC;"  href="{{action('TiendaController@detalleproducto', ['producto' => $producto->id ])}}" method="GET">
                       @csrf
                       @if($producto->img == null)
                             <img class="mx-auto d-block"
                              src="{{asset('assets/img/home/producto21.png')}}"
                              alt="Product Image">
                      @else
                            <img class="mx-auto d-block" src="{{ asset('storage/photo-producto/'.$producto->img) }}" >
                      @endif
                      <p class="text-right" style="color: rgb(0, 0, 0);"><a class="btn-c text-center ">Cremas</a><strong class="texto mr-1 prize">${{$producto->price}}</strong></p>
                      <p class="text-left"  style="color: #000000;"><strong class="texto2 fuente ml-1">{{$producto->name}}</strong></p>
                      <p class="text-left fuente ml-1 "  style="color: #303030;"> {{ Str::words( strip_tags($producto->description) , 15 )}}</p>
               </a>


               </div>
           </div>
        </a>
       </div>
       @endforeach
   </div>
</div>

