@foreach ($relacionados as $item )



<div class="ml-1 row d-flex  mt-2">
    <div class="card-body shadow ml-2 zoom2 mover4" style="background: white;border-radius: 10px; left: 700px; 10px;padding: 0.8rem;">
        <div class="d-flex ">
            <div class="background ">
                @if($producto->img == null)
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
            </div>
            <div class="col-6 ">
                <h5><strong>{{$item->name}}</strong></h5>
                <p class="card-text" style="color: black; width: 160px;">
                    {{ Str::words( strip_tags($producto->description) , 9 )}}</p>
                <a href="" class="btn btn-cre">
                    <p style="margin-top: -9px; margin-left: -13px;">{{ ucfirst($item->getCategories->categories_name)}}</p>
                </a>
                <p
                    style="color: black;margin-left: 140px;font-size: 20px;margin-bottom: 0;margin-top: -5px;">
                    <strong>${{$item->price}}</strong></p>
            </div>
        </div>
    </div>
</div>



    @endforeach

