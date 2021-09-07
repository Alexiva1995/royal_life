@foreach ($relacionados as $item )



<div class="ml-1 row d-flex  mt-2">
    <div class="card-body shadow ml-2 zoom2 mover4" style="background: white;border-radius: 10px; left: 700px; 10px;padding: 0.8rem; height: 92%;">
        <div class="d-flex ">
            <a class="background "
                 href="{{action('TiendaController@detalleproducto', ['producto' => $item->id ])}}">
                @if($item->img == null)
                             <img class="mx-auto d-block  img-fluid"
                              src="{{asset('assets/img/home/producto21.png')}}"
                              alt="Product Image"
                             >
                      @else
                            <img class="mt-2 mx-auto d-block  img-fluid"
                                 src="{{ asset('storage/photo-producto/'.$item->img) }}"
                                 alt="Product Image"
                                 style="min-width:90%; ">
                      @endif
        </a>
            <div class="col-6 ">
                <h5><strong>{{$item->name}}</strong></h5>
                <p class="card-text" style="color: black; width: 160px;">
                    {{ Str::words( strip_tags($item->description) , 9 )}}</p>

                <p class="text-right" style="color: rgb(0, 0, 0);"><a class="btn-cu text-center ">{{ ucfirst($producto->getCategories->categories_name)}}</a><strong class="texto3  prize2">${{$item->price}}</strong></p>

            </div>
        </div>
    </div>
</div>



    @endforeach

