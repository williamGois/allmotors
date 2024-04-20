<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>All Motors</title>
    <link rel="shortcut icon" href="img/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="{{ asset('css/plugins.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
</head>
<body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="/"> <img src="{{ asset('img/logo-dark.png')}}" class="logo-img" alt=""> </a>
                <!-- <a class="logo" href="index.html"><h2>Renta<span>x</span></h2></a> -->
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown"> <a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre">Sobre</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link" href="carros">Carros</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link" href="videos">Vídeos</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link" href="blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="vendedores">Vendedores</a></li>
                    <li class="nav-item"><a class="nav-link" href="contato">Contato</a></li>
                </ul>
                <div class="navbar-right">
                    <div class="wrap">
                        <div class="icon"> <i class="flaticon-phone-call"></i> </div>
                        <div class="text">
                            <p>Precisa de Ajuda?</p>
                            <h5><a href="tel:62999880208">(62) 99988-0208</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>