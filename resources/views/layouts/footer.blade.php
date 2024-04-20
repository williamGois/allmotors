<!-- Footer -->
<footer class="footer clearfix">
    <div class="container">
        <!-- first footer -->
        <div class="first-footer">
            <div class="row">
                <div class="col-md-12">
                    <div class="links dark footer-contact-links">
                        <div class="footer-contact-links-wrapper">
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="flaticon-phone-call"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Fale Conosco</h6>
                                    <p>(62) 99988-0208</p>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="omfi-envelope"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Escreva para nós</h6>
                                    <p>contato@allmotors.com.br</p>
                                </div>
                            </div>
                            <div class="footer-contact-links-divider"></div>
                            <div class="footer-contact-link-wrapper">
                                <div class="image-wrapper footer-contact-link-icon">
                                    <div class="icon-footer"> <i class="omfi-location"></i> </div>
                                </div>
                                <div class="footer-contact-link-content">
                                    <h6>Endereço</h6>
                                    <p>Avenida 85, n.º 2675 St. Marista </br> Goiânia - GO CEP 74.160-010</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- second footer -->
        <div class="second-footer">
            <div class="row">
                <!-- about & social icons -->
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <div class="footer-logo"><img src="{{ asset('img/logo-dark.png')}}" alt=""></div>
                        <!-- <div class="footer-logo"><h2>CARE<span>X</span></h2></div> -->
                        <div class="widget-text">
                            <p>Descubra o lugar onde a excelência e a exclusividade se encontram: nossa garagem oferece apenas o melhor em carros de luxo, garantindo que você encontre o veículo que não só atende, mas supera suas expectativas.</p>
                            <div class="social-icons">
                                <ul class="list-inline">
                                    <a href="https://api.whatsapp.com/send?phone=5562999880208" target="_blank">
                                        <li><i class="fa-brands fa-whatsapp"></i></li>
                                    </a>
                                    <a href="https://web.facebook.com/allmotors.goiania1" target="_blank">
                                        <li><i class="fa-brands fa-facebook-f"></i></li>
                                    </a>
                                    <a href="https://www.youtube.com/@ALLMOTORSGYN" target="_blank">
                                        <li><i class="fa-brands fa-youtube"></i>
                                    </a></li></a>
                                    <a href="https://www.instagram.com/allmotors" target="_blank">
                                        <li><i class="fa-brands fa-instagram"></i></li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- quick links -->
                <div class="col-md-3 offset-md-1 widget-area">
                    <div class="widget clearfix usful-links">
                        <h3 class="widget-title">Links</h3>
                        <ul>
                            <li><a href="sobre">Sobre</a></li>
                            <li><a href="carros">Carros</a></li>
                            <li><a href="videos">Vídeos</a></li>
                            <li><a href="blog">Blog</a></li>
                            <li><a href="vendedores">Vendedores</a></li>
                            <li><a href="contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
                <!-- subscribe -->
                <div class="col-md-4 widget-area">
                    <div class="widget clearfix">
                        <h3 class="widget-title">Newsletter</h3>
                        <p>Quer ser notificado sobre nossos carros.</p>
                        <div class="widget-newsletter">
                            <form action="#">
                                <input type="email" placeholder="Seu melhor E-mail" required>
                                <button type="submit"><i class="ti-arrow-top-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bottom footer -->
        <div class="bottom-footer-text">
            <div class="row copyright">
                <div class="col-md-12">
                    <p class="mb-0">&copy;2024 All Motors. Todos Direitos Reservados.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- RentNow Popup -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Precisa de mais Detalhes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="booking-box">
                    <div class="booking-inner clearfix" style="justify-content: center;display: flex;">
                        <form method="post" action="#0" style="width:74%;" class="form1 contact__form clearfix">
                            <!-- form message -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert"> Sua mensagem foi enviada com sucesso. </div>
                                </div>
                            </div>
                            <!-- form elements -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <input name="name" type="text" placeholder="Nome Completo *" required>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <input name="email" type="email" placeholder="E-mail *" required>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <input name="phone" type="text" placeholder="Telefone *" required>
                                </div>



                                <div class="col-lg-12 col-md-12 form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Mensagem  "></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="booking-button mt-15">Enviar</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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