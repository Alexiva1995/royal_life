<script type="text/javascript">
    const carrito = @json($carrito);

    function iniciar(){

        localStorage.setItem(carrito);
         mostrar(carrito);
    }


    function mostrar() {

        var datos = document.getElementById('datos');

         var carrito1 = localStorage.getItem(carrito);
         console.log(carrito1);
        datos.innerHTML+='<th>'+carrito1.img+'</th>';
        datos.innerHTML+='<th>'+carrito1.name+'</th>';
        datos.innerHTML+='<th>'+carrito1.categorianame+'</th>';
        datos.innerHTML+='<th>'+carrito1.cantidad+'</th>';
        datos.innerHTML+='<th>'+carrito1.monto+'</th>';
        datos.innerHTML+='<th>'+carrito1.total+'</th>';


    }

    window.addEventListener('load',iniciar, false);

</script>
