<div class="container d-fex col-md-8">
    <div class="row d-flex justify-content-end mt-5">
       @foreach ($packages as $producto )


       <div class="col-md-6">


           <div class="col-md-12 ">

               <div class="mt-1 card col-mt-5 col-md-12  zoom " style="background:#FFFFFF">
                   <p class=" text-center bdr bar  " style= "background: #67FFCC;      ">
                       <img class="  " src="{{asset('storage/photo-profile/'.$producto->img)}}"   width="160" height="230" >
                   </p>
                   <div class="card-body bar2">
                       <form action="{{route('cheking.backofice')}}" method="POST" target="_blank" class="d-inline">
                           @csrf


                       <p class="text-right" style="color: rgb(0, 0, 0);"><a class="text-iz box"></a> <strong>${{$producto->price}}</strong></p>
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
   </div>
</div>
</div>
</div>
</div>
