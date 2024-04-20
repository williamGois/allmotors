@include('layouts.header')
    <!-- Header Inner Slider -->
    <header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/slider/1.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/cars/c2.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/cars/c3.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/cars/c4.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="4" data-background="img/cars/c5.jpg"></div>
        </div>
    </header>
    <!-- Details -->
    <section class="car-details section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-12 mb-60">
                            <h3>Informações Gerais</h3>
                            <!-- <p class="mb-30">Lorem pretium fermentum quam, sit amet cursus ante sollicitudin velen morbi consesua the miss sustion consation porttitor orci sit amet iaculis nisan. Lorem pretium fermentum quam sit amet cursus ante sollicitudin velen fermen morbinetion consesua the risus consequation the porttiton.</p> -->
                            <ul class="list-unstyled list mb-30">
                                <li>
                                    <div class="list-icon"> <span class="ti-check"></span> </div>
                                    <div class="list-text">
                                        <p>Cor Grigio Lynx</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="ti-check"></span> </div>
                                    <div class="list-text">
                                        <p>Importação Oficial</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-icon"> <span class="ti-check"></span> </div>
                                    <div class="list-text">
                                        <p>Interior bicolor Nero e Arancio com Forje Composite</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--  Gallery Image -->
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Image Gallery</h3>
                        </div>
                    </div>
                    <div class="row gallery-items mb-60">
                        <div class="col-md-4 gallery-masonry-wrapper single-item cardio">
                            <a href="img/cars/c7.jpg" title="" class="gallery-masonry-item-img-link img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="img/cars/c7.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-masonry-item-img"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-masonry-wrapper single-item crossfit">
                            <a href="img/cars/c8.jpg" title="" class="gallery-masonry-item-img-link img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="img/cars/c8.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-masonry-item-img"></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 gallery-masonry-wrapper single-item crossfit">
                            <a href="img/cars/c9.jpg" title="" class="gallery-masonry-item-img-link img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="img/cars/c9.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-masonry-item-img"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- FAQs -->
                    
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-car">
                        <div class="title">
                            <h4>R$ 2.700.000,00</h4>
                        </div>
                        <div class="item">
                            <div class="features"><span><i class="omfi-door"></i> Portas</span>
                                <p>4</p>
                            </div>
                            <div class="features"><span><i class="omfi-passengers"></i> Passageiros</span>
                                <p>5</p>
                            </div>
                            <div class="features"><span><i class="omfi-transmission"></i> Cambio</span>
                                <p>Auto</p>
                            </div>
                            <div class="features"><span><i class="omfi-condition"></i> Combustível</span>
                                <p>Gasolina</p>
                            </div>
                            <div class="btn-double mt-30" data-grouptype="&amp;"> <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0">Duvida?</a> <a href="https://api.whatsapp.com/send?phone=5562999880208" target="_blank"><span class="fa-brands fa-whatsapp"></span> WhatsApp</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <!-- Lets Talk -->
    <section class="lets-talk bg-img bg-fixed section-padding" data-overlay-dark="5" data-background="img/slider/3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h6>Compre seu Carro</h6>
                    <h5>Ficou com alguma dúvida?</h5>
                    <p>Não hesite e envie-nos uma mensagem.</p> <a href="https://api.whatsapp.com/send?phone=5562999880208" target="_blank" class="button-1 mt-15 mb-15 mr-10"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a> <a data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" href="#0" class="button-2 mt-15 mb-15">Compre Agora <span class="ti-arrow-top-right"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/1.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/2.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/3.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/4.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/5.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/6.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/7.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/8.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('layouts.footer')