
 <div class="row card   ml-3 mt-5 col-xs-3" style="background:#ffffff; top: 20px; width: 40rem; " >
        <div class="row card mt-2 col-6" style="background:#ffffff; width: 40rem;;">
             <h6> <strong class="fuente "> Categorias </strong></h6>
                                    <hr class="hr">
                                    @foreach ( $categorias as $categories )
                                    <div class="form-check col-12 ">
                                        <input class="form-check-input" type="checkbox" value="{{$categories->id}}"id="flexCheckDefault">
                                        <label class="form-check-label mb-2"for="flexCheckDefault" style="">
                                            <a class="s " href="{{ route('categorias.show', ['Categories' => $categories->id ]) }}">
                                        <strong>  {{ ucfirst($categories->categories_name) }}</strong>
                                            </a>

                                        </label>
                                    </div>
                                    @endforeach

                                    <h6><strong> Precio </strong><h6>
                                    <hr class="hr">
                                    <div class="slidecontainer">
                                        <input type="range" min="1" max="100" value="100" class="slider" id="myRange">
                                    </div>
                                    <div>
                                        <h6 class="text-center text-dark  "><strong> $0-$3000 </strong></h6>
                                   </div>
                             </div>
                     </div>
                 </div>





