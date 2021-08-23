@push('custom_css')
<style>
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
	height:270px;
    width: 287px;
    left: -23px;
}

.bar2 {
    position: relative;
    height:285px;

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
    color: #67FFCC;
    text-decoration: none;
    background-image: linear-gradient(currentColor, currentColor);
    background-position: 0% 100%;
    background-repeat: no-repeat;
    background-size: 0% 2px;
    transition: background-size .3s;

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


</style>
@endpush
