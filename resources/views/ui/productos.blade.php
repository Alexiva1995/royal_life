@foreach ($packages as $producto )
@foreach ( $categorias as $categoria )

<div class="col-md-6">


    <div class="col-md-12 ">

        <div class="mt-1 card col-mt-5 col-md-12  zoom " style="background:#FFFFFF">
            <p class=" text-center bdr bar  " style= "background: #67FFCC;      ">
                <img class="  " src="{{asset('storage/photo-profile/'.$producto->img)}}"   width="150" height="150" >
            </p>
            <div class="card-body bar2">
                <form action="{{route('cheking.backofice')}}" method="POST" target="_blank" class="d-inline">
                    @csrf
                <input type="hidden" name="idproduct" value="{{$producto->categoria_id}}}">
                <input type="hidden" name="idproduct" value="">
                {{-- <input type="hidden" name="categories_id" value="{{$categoria->id}}"> --}}
                <p class="text-right" style="color: rgb(0, 0, 0);"><strong class="text-iz">{{$categoria->name}}</strong> <strong>${{$producto->price}}</strong></p>
                <p class="text-left"  style="color:  #000000;"><strong>{{$producto->name}}</strong></p>
                <p class="text-left"  style="color:  #303030;">{{ Str::words( strip_tags($producto->description) , 15 )}}</p>

                <button
                class="btn btn-custom text-white"
                type="submit"
                style="background: #67FFCC;"
                > <strong style="color:#000000;"> Comprar  </strong></button>
                </form>
            </div>
        </div>
    </div>
</div>

@endforeach
@endforeach
