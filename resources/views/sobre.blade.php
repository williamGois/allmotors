@include('layouts.header')
<!-- Header Banner -->
<section class="banner-header section-padding bg-img" data-overlay-dark="4" data-background="img/slider/3.jpg">
    <div class="v-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6>All Motors</h6>
                    <h1>Sobre <span>Nós</span></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- divider line -->
<div class="line-vr-section"></div>
<!-- About -->
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content">
                    <div class="section-subtitle">All Motors</div>
                    <div class="section-title">Somos mais do que <span>Uma empresa de venda de automóveis</span></div>
                    <p>Aqui na All Motors, nossa paixão por carros luxuosos vai além da simples venda de veículos; nós vendemos sonhos. Cada carro em nosso showroom não é apenas um meio de transporte, mas uma obra-prima cuidadosamente selecionada, desenhada para oferecer não apenas conforto e desempenho excepcionais, mas uma experiência inesquecível.</p>
                    <p>Nos dedicamos a entender as necessidades e desejos de cada cliente, oferecendo um serviço personalizado que transforma a compra de um carro em um evento marcante. Nossa equipe é treinada para oferecer consultoria especializada, garantindo que cada cliente saia com o carro perfeito para seu estilo de vida e aspirações. Com uma gama exclusiva de modelos de alto padrão, estamos prontos para atender os gostos mais refinados e exigências específicas.</p>
                    <p>Venha para All Motors e descubra um mundo onde luxo, tecnologia e arte se encontram em cada detalhe. Aqui, cada cliente é único e cada carro é um ícone de estilo e engenharia. Celebre conosco o prazer de dirigir.</p>
                </div>

                <img style="width: 44%;" src="img/assinatura.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="item">
                    <video playsinline="" autoplay="" loop="" muted="" width="600" height="630">
                        <source src="{{ asset('video/allmotors.mp4') }}" type="video/mp4" autoplay="" loop="" muted="">
                    </video>
                
                </div>
            </div>
        </div>
    </div>
</section>


<div class="line-vr-section"></div>


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