<div class="container d-fex col-md-8">
    <div class="row d-flex justify-content-end mt-5">
       @foreach ($packages as $producto )


       <div class="col-md-6">


           <div class="col-md-12 ">
            <a class="card-body bar2" href="{{route('detalle.producto')}}" method="GET">
               <div class=" card col-mt-5 col-md-12  zoom " style="background:#FFFFFF">
                 {{--     <p class=" text-center bdr bar  " style= "background: #67FFCC;      ">--}}
                       <p class="text-center bdr bar "
                       style="background: #67FFCC;">
                       <img class="mx-auto d-block" src="{{asset('assets/img/home/producto21.png')}}">
                   </p>
                    @csrf
                   {{--    <form action="{{route('cheking.backofice')}}" method="POST">
                           @csrf --}}

                       <p class="text-right" style="color: rgb(0, 0, 0);"><a class="btn-c text-center">Cremas</a><strong class="texto">${{$producto->price}}</strong></p>
                       <p class="text-left"  style="color: #000000;"><strong class="texto2 fuente ">{{$producto->name}}</strong></p>
                       <p class="text-left"  style="color: #303030;">{{ Str::words( strip_tags($producto->description) , 15 )}}</p>
                   {{--    </form> --}}
               {{--    </p> --}}
               </div>

           </div>
        </a>
       </div>


       @endforeach
   </div>
</div>
</div>
</div>
</div>
