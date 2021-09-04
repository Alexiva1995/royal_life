@extends('backofice.layouts.dashboard')
@push('custom_css')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap');
    .image{
        float: right;
    }
    .image2{
        float: left;
    }
    .fuente{
    font-family: 'Montserrat';
    font-style: normal;
}

</style>
@endpush

@section('content')
<div class="carousel-inner">
    <img class="d-block w-100 fuente" src="{{asset('assets/img/home/formas_fondo3.png')}}" style="background: #173138;">
    <div class="container carousel-caption d-flex justify-content-start" style="top:90px;left: 7%;">
        <div class="row">
            <div class="col-md-12">

                <div class="text-left">
                    <h3 class="text-white ml-4" style="font-size: 50px;"><strong> Politicas y privacidad </strong></h3>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container fuente pt-5">
    <div class="row">

    </div>
    <img class="ml-3 image2 mr-1" src="{{asset('assets/img/home/policity1.png')}}" style="width: 35%;">
    <p class="ml-3 mr-3 text-dark mt-1 fuente">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet elit eu metus
                        luctus maximus id at lorem. Morbi tortor sapien, volutpat eu dui non, sollicitudin consequat
                        ex. Etiam porttitor mauris urna, a eleifend leo pellentesque vel. Nunc eget purus vitae erat
                        condimentum scelerisque. Nullam dapibus eget neque nec elementum. Morbi sagittis metus a purus
                        elementum, sit amet blandit mauris facilisis. Quisque massa metus, elementum ut ipsum nec, iaculis
                        pellentesque quam. Sed consectetur laoreet fringilla. Praesent at semper nibh. Etiam metus elit, ti
                        ncidunt sit amet lectus et, tristique feugiat enim. Fusce viverra et sem ut accumsan. Nullam in libero
                        nec nisl pellentesque sollicitudin. Praesent volutpat justo nec ornare pellentesque. Etiam
                        tempor orci ipsum, vitae ultricies odio convallis et. Orci varius natoque penatibus et magni
                        s dis parturient montes, nascetur ridiculus mus.
<br>
<br>
                        Duis id facilisis odio. Phasellus malesuada blandit sapien a ultricies. Class aptent taciti sociosqu a
                        d litora torquent per conubia nostra, per inceptos himenaeos. Sed varius, felis vitae eleifend sodales
                        , sapien risus dapibus ligula, at malesuada massa ante et orci. Sed a congue enim. Quisque nisi elit, mo
                        lestie sit amet sem id, tempus blandit mauris. Vestibulum quis ornare elit, eu vestibulum nisi. Aliquam
                        lacinia egestas eros, lobortis bibendum nunc varius eu. Etiam sapien sapien, commodo sed lorem eget, venen
                        atis fermentum arcu. Integer ex orci, condimentum sit amet posuere eget, aliquam in arcu. Nullam nec purus
                        a dui posuere porttitor. Duis fringilla nisi non mi lacinia, nec interdum magna cursus.
<br>
<br><img class="image" src="{{asset('assets/img/home/terms2.png')}}" style="width: 25%;">

                        Nam libero felis, hendrerit id molestie accumsan, egestas eu justo. Etiam ullamcorper dui sem. Mauris mal
                        esuada consectetur augue, eu vulputate sem maximus at. Etiam commodo nisi ac sodales gravida. Morbi s
                        celerisque leo orci. Maecenas quis varius purus, at molestie nunc. Fusce et ex blandit, porta erat aliq
                        uam, tristique ipsum. Praesent volutpat maximus convallis. Ut rhoncus lectus hendrerit libero aliquet mat
                        tis non nec lorem. Integer consectetur euismod felis. Vivamus interdum odio sit amet tortor aliquet, id v
                        arius ante varius. Etiam vehicula ante mauris, quis cursus ipsum lacinia ac. Etiam et blandit dui. Sed vi
                        tae condimentum ex.
<br>
<br>
                        Sed vel quam leo. Nam blandit eget nulla id dapibus. Suspendisse id elementum magna. Ut quis luctus velit
                        . Vivamus ut velit in augue mattis bibendum. Sed suscipit elementum dolor sit amet finibus. Ut sed sem sa
                        pien. Mauris at nunc vel nunc porta consectetur feugiat id mi. Integer ullamcorper eget metus a fringilla.
                        Quisque in elit auctor, ornare sapien at, sagittis nisl. Donec aliquam ut libero id dapibus. Duis consequ
                        at nunc eu tincidunt consequat.
<br>


                        In congue malesuada feugiat. Duis rutrum quam mi, et auctor leo vestibulum sit amet. Nulla et leo eu just
                        o suscipit lobortis. Suspendisse efficitur purus eros, eget suscipit ante congue vitae. Suspendisse preti
                        um viverra est eget semper. Proin molestie tellus pulvinar, malesuada dui ut, mollis felis. Mauris at tel

                        lus gravida, venenatis lorem id, feugiat ipsum. Integer ac condimentum nisi. Cras scelerisque laoreet hend
                        rerit. Aenean ut tellus non ex lobortis molestie. Curabitur dolor sem, molestie ut tellus quis, iaculis el
                        eifend nisi. Proin non lacus fermentum, vehicula est dapibus, varius mi.
                        lus gravida, venenatis lorem id, feugiat ipsum. Integer ac condimentum nisi. Cras scelerisque laoreet hend
                        rerit. Aenean ut tellus non ex lobortis molestie. Curabitur dolor sem, molestie ut tellus quis, iaculis el
                        eifend nisi. Proin non lacus fermentum, vehicula est dapibus, varius mi.
    </p>
<div class="text-center">
    <img class="text-center" src="{{asset('assets/img/home/policity.png')}}" style="width: 30%;">
</div>
</div>





@endsection
