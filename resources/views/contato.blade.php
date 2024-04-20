@include('layouts.header')
<!-- Header Banner -->
<section class="banner-header middle-height section-padding bg-img" data-overlay-dark="5" data-background="img/slider/3.jpg">
    <div class="v-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>Não tenha Dúvidas</h6>
                    <h1>Entre em <span>Contato</span></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Box -->
<div class="contact-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                <div class="item"> <span class="icon omfi-envelope"></span>
                    <h5>Nosso E-mail</h5>
                    <p>contato@allmotors.com.br</br></p> <i class="numb omfi-envelope"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                <div class="item"> <span class="icon omfi-location"></span>
                    <h5>Nosso Endereço</h5>
                    <p>Avenida 85, n.º 2675 St. Marista</p> <i class="numb omfi-location"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                <div class="item"> <span class="icon ti-time"></span>
                    <h5>Atendimento</h5>
                    <p>Seg-Sex: 08:00 - 18:00</br></p> <i class="numb ti-time"></i>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 animate-box" data-animate-effect="fadeInUp">
                <div class="item active"> <span class="icon omfi-phone"></span>
                    <h5>Ligue para nós</h5>
                    <p>(62) 99988-0208</br></p> <i class="numb omfi-phone"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->
<section class="contact section-padding">
    <div class="container">
        <div class="row">
            <!-- Form -->
            <div class="col-lg-6 col-md-12 mb-30">
                <div class="form-box">
                    <h5>Entrar em contato</h5>
                    <form method="post" class="contact__form" action="mail.php">
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Sua Mensagem Foi Enviada Com Sucesso. </div>
                            </div>
                        </div>
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" placeholder="Nome *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="E-mail *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Telefone *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="subject" type="text" placeholder="Assunto *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Mensagem *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <input name="submit" type="submit" value="Enviar Mensagem">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map -->
            <div class="col-lg-5 offset-lg-1 col-md-12">
                <h5>Location</h5>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.4272042347466!2d-49.266343825081435!3d-16.705522884069964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef1408d52e17b%3A0x2f98baf3119af488!2sAll%20Motors!5e0!3m2!1spt-BR!2sbr!4v1713588700518!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573147.7480448114!2d-74.84628175962355!3d41.04009641088412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25856139b3d33%3A0xb2739f33610a08ee!2s1616%20Broadway%2C%20New%20York%2C%20NY%2010019%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1646760525018!5m2!1str!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<!-- jQuery -->
<script src="{{ asset('js/jquery-3.7.1.min.js')}}"></script>
<script src="{{ asset('js/jquery-migrate-3.4.1.min.js')}}"></script>
<script src="{{ asset('js/modernizr-2.6.2.min.js')}}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('js/jquery.isotope.v3.0.2.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/scrollIt.min.js')}}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
<script src="{{ asset('js/select2.js')}}"></script>
<script src="{{ asset('js/datepicker.js')}}"></script>
<script src="{{ asset('js/YouTubePopUp.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
</body>

</html>