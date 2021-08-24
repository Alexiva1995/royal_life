

@push('custom_css')
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap');

.zoom:hover {
    -webkit-transform:scale(1.05);
    -moz-transform:scale(1.05);
    -ms-transform:scale(1.05);
    -o-transform:scale(1.05);
    transform:scale(1.05);

    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    -ms-transition:all 0.3s ease;
    width:100%;
}
.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}

.bdr
{
    border-radius: 6px;overflow:hidden;

}
.bar {
    position: relative;
    top: -10px;
	height:210px;
    width: 287px;
    left: -23px;

}

.bar2 {
    position: relative;
    height:220px;

}

.caja{
    background: #F5F5F5;
border: 1px solid #DADADA;
box-sizing: border-box;
border-radius: 5px;
}
.btn-custom{
    width: 100%;
    height: auto;

    background: #67FFCC;
    border-radius: 7px;
}

.circulo{

width: 15px;
height: 15px;
left: 206px;
top: 810px;

background: #FFFFFF;
border: 2px solid #000000;
box-sizing: border-box;
}

.s{
    color: #303030;
    text-decoration: none;
    background-image: linear-gradient(currentColor, currentColor);
    background-position: 0% 100%;
    background-repeat: no-repeat;
    background-size: 0% 2px;
    transition: background-size .3s;
    font-family: 'Montserrat', sans-serif;
    font-style: normal;
    font-size: 14px;

}

.s:hover, s:focus {
    color: #67FFCC;
    background-size: 100% 2px;

}

.container {
        display: flex;
      }

.text-iz{

    position: relative;
    top: 1px;
	height:200px;
    left: -145px;
    background: #F2F1F3;
    background-size: 25px 50px;
    background-size: 50% 50%;


}

.texto{
    font-size: 20px;
    position: relative;
    top: 12px;
}
.texto2{
    font-size: 18px;
}



.fuente{
    font-family: 'Montserrat', sans-serif;
    font-style: normal;
}
.tarjeta{
    position: relative;
    top: 20px;
}
.tarjeta2{
    position: relative;
    top: -90px;

}

.circulo{

position: relative;
width: 15px;
height: 15px;
left: 108px;
top: 110px;

background: #FFFFFF;
border: 2px solid #000000;
box-sizing: border-box;
}

</style>
@endpush
