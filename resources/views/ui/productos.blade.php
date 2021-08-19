
<div class="col-md-6">
    {{$categoria->id}}

    <div class="col-md-12 ">

        <div class="card text-center zoom" style="background:#FFFFFF">
                <p class=" text-center  " style= "background: #67FFCC;  ">
                <img class=" text-center  text-center bdr bar " src="{{asset('storage/photo-profile/'.$producto->img)}}"   width="150" height="150" >
                </p>
            <div class="card-body">

                <input type="hidden" name="idproduct" value="{{$producto->categoria_id}}}">
                <input type="hidden" name="categories_id" value="{{$categoria->id}}">
                <p class="text-right" style="color: rgb(0, 0, 0);"><strong>  ${{$producto->price}}</strong></p>
                <p class="text-left"  style="color:  #000000;"><strong>{{$producto->name}}</strong></p>
                <p class="text-left"  style="color:  #303030;">{{ Str::words( strip_tags($producto->description) , 15 )}}</p>
            </div>
        </div>
    </div>
</div>


