<div class="ml-3  d-fex col-md-8">
    <div class="row d-flex justify-content-end mt-5">
       @foreach ($packages as $producto )

       <div class="row col-md-6 ">
           <div class="col-md-12 ">
            <a class="card-body " href="{{route('detalle.producto')}}" method="GET">
               <div class=" card col-mt-5   zoom " style="background:#FFFFFF">
                 {{--     <p class=" text-center bdr bar  " style= "background: #67FFCC;      ">--}}
                       <p class="text-center bdr bar  "
                       style="background: #67FFCC;">
                       @if($producto->img == null)
                                        <img class="mx-auto d-block"
                                         src="{{asset('assets/img/home/producto21.png')}}"
                                         alt="Product Image"
                                         >
                                         @else
                                         <img class="mx-auto d-block" src="{{ asset('storage/photo-producto/'.$producto->img) }}" >
                                        @endif
                       </p>
                    @csrf
                   {{--    <form action="{{route('cheking.backofice')}}" method="POST">
                            @csrf --}}

                       <p class="text-right" style="color: rgb(0, 0, 0);"><a class="btn-c text-center ">Cremas</a><strong class="texto mr-1">${{$producto->price}}</strong></p>
                       <p class="text-left"  style="color: #000000;"><strong class="texto2 fuente ml-1">{{$producto->name}}</strong></p>
                       <p class="text-left fuente ml-1"  style="color: #303030;"> {{ Str::words( strip_tags($producto->description) , 15 )}}</p>
                   {{--    </form> --}}
               {{--    </p> --}}
               </div>

           </div>
        </a>
       </div>


       @endforeach
   </div>
</div>

