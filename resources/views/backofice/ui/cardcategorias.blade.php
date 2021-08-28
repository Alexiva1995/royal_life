 <div class="ml-7">
     <div class="row">

<div class="ml-12 mt-3 " style="background:#ffffff">
    <div class="card-content tarjeta2">
        <div class="card-body card-group mt-12 ">

           <div class=" d-fex col-md-3">
            <div class="row d-flex justify-content-start mt-5">
                <div class="card col-12 tarjeta tarjeta3 ml-2" style="background:#FFFFFF" >
                    <div class="card-body">
                    <h6> <strong class="fuente"> Categorias </strong></h6>
                    <hr class="hr">
                    @foreach ( $categorias as $categories )

                    <div class="form-check">
                        <input class="form-check-input"
                               type="checkbox"
                               value="{{$categories->id}}"
                               id="flexCheckDefault">

                        <label class="form-check-label mb-2"
                               for="flexCheckDefault"
                               style="">
                               <a class="s " href="{{ route('categorias.show', ['Categories' => $categories->id ]) }}">
                        <strong>  {{ ucfirst($categories->name) }}</strong>
                             </a>

                        </label>
                      </div>
                      @endforeach
                      <br>
                      <h6><strong> Precio </strong><h6>
                      <hr class="hr">


                      <div class="slidecontainer">
                        <input type="range" min="1" max="100" value="100" class="slider" id="myRange">

                      </div>

                      <h6 class="fuente text-dark text-center "><strong> $0-$3000 </strong></h6>
                    </div>
                </div>
             </div>
             </div>
