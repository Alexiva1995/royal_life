<div class="container d-fex col-md-8">
    <div class="row d-flex justify-content-end mt-5">
       @foreach ($packages as $producto )


       <div class="col-md-6">


           <div class="col-md-12 ">
            <a class="card-body bar2" href="{{route('cheking.backofice')}}" method="GET">
               <div class=" card col-mt-5 col-md-12  zoom " style="background:#FFFFFF">
                 {{--     <p class=" text-center bdr bar  " style= "background: #67FFCC;      ">--}}
                       <img class=" text-center bdr bar img" src="{{asset('storage/photo-profile/'.$producto->img)}}" style= "background: #67FFCC;">
                    @csrf
                   {{--    <form action="{{route('cheking.backofice')}}" method="POST">
                           @csrf --}}
                       <p class="text-right" style="color: rgb(0, 0, 0);"><a class="text-iz box"></a> <strong class="texto">${{$producto->price}}</strong></p>
                       <p class="text-left"  style="color: #000000;"><strong class="texto2 fuente">{{$producto->name}}</strong></p>
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
