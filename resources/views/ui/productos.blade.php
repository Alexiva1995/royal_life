
<div id="adminServices" >
    <div class="">
     <div class="col-12 ">

        <div class="" style="background:#E5E5E5">
            <div class="card-content ">
                <div class="card-body card-group mt-12 ">
                   <h1 class="text-white">Tienda</h1>
                   <div class=" d-fex col-md-3">
                    <div class="row d-flex justify-content-start mt-5">
                        <div class="card col-12" style="background:#FFFFFF" >
                            <h6> <strong> categorias </strong></h6>

                           @foreach ( $categorias as $categoria )

                            <div class="form-check">
                                <input class="form-check-input"
                                       type="checkbox"
                                       value=""
                                       id="flexCheckDefault">

                                <label class="form-check-label"
                                       for="flexCheckDefault"
                                       style="color:  #303030;">
                                       <a class="nav-link" href="{{ route('categorias.show', ['Categories' => $categoria->id ]) }}">
                                        {{ $categoria->name }}
                                     </a>
                                </label>
                              </div>
                              @endforeach
                            </div>
                     </div>
                     </div>
                    <div class="container d-fex col-md-6">
                     <div class="row d-flex justify-content-end mt-5">
                        @foreach ($packages as $items)
                        <div class="col-md-6">

                            <div class="col-md-12 ">

                                <div class="card text-center zoom" style="background:#FFFFFF">
                                        <p class=" text-center  " style= "background: #67FFCC;  ">
                                            <img class=" text-center " src="{{asset('storage/photo-profile/'.$items->img)}}"   width="150" height="150" >
                                        </p>
                                    <div class="card-body">

                                        <input type="hidden" name="idproduct" value="{{$items->id}}">
                                        <input type="hidden" name="categories_id" value="">
                                        <p class="text-right" style="color: rgb(0, 0, 0);">  <strong>  ${{$items->price}}</strong></p>
                                        <p class="text-left"  style="color:  #000000;"><strong>{{$items->name}}</strong></p>
                                        <p class="text-left" style="color:  #303030;">{{ Str::words( strip_tags($items->description) , 15 )}}</p>
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
    </div>
</div>
</div>
