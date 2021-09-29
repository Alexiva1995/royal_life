<div class="footer-clean">
    <footer>
        <div class="carousel-inner padin-card pt-1">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-2 item">
                    <img src="{{ asset('assets/img/royal_green/logos/logo.svg') }}"
                        style="margin-left: -35px; margin-top: -20px;" alt="">
                    <p style="margin-left: -20px;">Sigue nuestras redes sociales</p><br>
                    <div class="d-flex">
                        <img src="{{ asset('assets/img/home/facebook1.png') }}"
                            style="margin-left: -22px; margin-top: -20px;" alt="">

                            <a href="https://instagram.com/royal_lifeoficial">
                        <img  src="{{ asset('assets/img/home/instagram1.png') }}"
                            style="margin-left: 30px; margin-top: -20px;" alt="">
                            </a>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2 item ml-3">
                    <h3 class="white">Encuentranos</h3>
                    <ul>
                        <li><a href="#">Bogotá-Colombia</a></li>
                    </ul><br>
                    <h3 class="white">Contactanos</h3>
                    <ul>
                        <li><a href="">(+57)12345678</a></li>
                        <li><a href="">info@royallife.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 item ml-3">
                    <h3 class="white ">Nosotros</h3>
                    <ul>
                        <li class=""><a href="{{route('about')}}">¿Quienes Sómos?</a></li>
                        <br>
                        <li class=""><a href="{{route('terms')}}">Terminos y Condiciones</a></li>
                        <br>
                        <li class=""><a href="{{route('policity')}}">Politicas y privacidad</a></li>
                        <br>
                        <li class=""><a href="{{route('faq')}}">Preguntas Frecuentes</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3 class="white">Recibe nuestras <br> NewLetters</h3>
                    <p>¡Subcribete y recibe un correo con las últimas promociones de nuestros productos!</p>
                    <div class="input-group mb-3">
                        <input type="text"
                               class="form-control text-dark"
                               style="background: white;"
                               placeholder="Ingresa tu email"

                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="btn-sub">Subcribete</span>
                        </div>
                    </div>
                </div>
                <div class="item social">
                    <img src="{{ asset('assets/img/home/line4.png') }}" alt="">
                    <p class="copyright d-flex justify-content-start">Copyright © 2021 Royal life</p>
                    <div style="margin-top: -27px;">
                        <img src="{{ asset('assets/img/home/payment-sprite.png') }}" alt="">
                        <img src="{{ asset('assets/img/home/payment-mater.png') }}" alt="">
                        <img src="{{ asset('assets/img/home/payment-paypal.png') }}" alt="">
                        <img src="{{ asset('assets/img/home/payment-visa.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
