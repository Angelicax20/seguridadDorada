@extends('layouts.home')
@section('content')
    

<div id="video">
    <div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <header id="header">
        <div class="container-fluid d-flex justify-content-center">
            <div class="navbar">
                <div class="navigation-row">
                    <nav id="navigation">
                        <!-- <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button> -->
                        <div class="nav-box navbar-collapse">
                            <a href="#" id="logo" title="Elegance by TemplateMo">
                                <img src="{{asset('storage/images/logo.svg')}}" alt="" width="120rem">
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="fullpage" class="fullpage-default">
        <div class="section animated-row" data-section="slide01">
            <div class="section-inner">
                <div class="welcome-box">
                    <h1 class="welcome-title-compra animate mb-5" data-animate="fadeInUp">¿Cómo identificar un sitio
                        de
                        compra
                        seguro?
                    </h1>
                    <h3 class="welcome-first-compra animate" data-animate="fadeInUp">Paso 1
                    </h3>
                    <p class="animate" data-animate="fadeInUp">Revisa si el sitio tiene un certificado de seguridad
                        SSL (Secure Socket Layer), el cual se indica con el símbolo de un candado en la barra de
                        direcciones.</p>
                    <div>
                        <button class="play-button mb-3" id="play_paso_1">
                            <i class="fa fa-play play-3"></i>
                        </button>

                        <audio id="audio_paso_1" controls hidden
                            src="./audio/PASO 2.1 .mp3">
                            <source id="audioSource" type="audio/webm"
                                src="./audio/PASO 2.1 .mp3">
                        </audio>
                    </div>
                    <a href="#slide02" class="btn btn-s btn-secondary animate btn-select">Siguiente </a>
                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide02">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <!-- Guia Introducion -->
                        <div class="title-block animate intro" data-animate="fadeInUp">
                            <h2>Paso 2</h2>
                            <h4><b>Verifica si el sitio tiene diversas</b> opciones de pago, incluyendo opciones
                                seguras
                                como PayPal o tarjetas de crédito.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_2">
                                    <i class="fa fa-play play"></i>
                                </button>

                                <audio id="audio_paso_2" controls hidden
                                    src="./audio/PASO 2.2 .mp3">
                                    <source id="audioSource" type="audio/webm"
                                        src="./audio/PASO 2.2 .mp3">
                                </audio>
                            </div>
                            <a href="#slide03" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente">Siguiente</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide03">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <!-- Guia Introducion -->
                        <div class="title-block animate intro" data-animate="fadeInUp">
                            <h2>Paso 3</h2>
                            <h4>Busca opiniones o reseñas de otros usuarios sobre el sitio. Si es una tienda o marca
                                conocida, verifica si hay comentarios de clientes registrados en sitios
                                especializados en reseñas.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_3">
                                    <i class="fa fa-play play-2"></i>
                                </button>

                                <audio id="audio_paso_3" controls hidden
                                    src="./audio/PASO 2.3 .mp3">
                                    <source id="audioSource" type="audio/webm"
                                        src="./audio/PASO 2.3 .mp3">
                                </audio>
                            </div>
                            <a href="#slide04" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente">Siguiente</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide04">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <!-- Guia Introducion -->
                        <div class="title-block animate intro" data-animate="fadeInUp">
                            <h2>Recordatorio</h2>
                            <h4>Recuerda que estos pasos te ayudarán a tener más seguridad en tus compras en línea,
                                pero siempre debes tener precaución y no compartir información personal o financiera
                                a sitios que no te transmitan confianza.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_4">
                                    <i class="fa fa-play  play-2"></i>
                                </button>

                                <audio id="audio_paso_4" controls hidden
                                    src="./audio/Recordatorio .mp3">
                                    <source id="audioSource" type="audio/webm"
                                        src="./audio/Recordatorio .mp3">
                                </audio>
                            </div>
                            <a href="#slide05" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente">Siguiente</a>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide05">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <!-- Guia Introducion -->
                        <div class="title-block animate intro" data-animate="fadeInUp">
                            <h2>Guias</h2>
                            <h4>Si estás interesado en realizar compras en línea pero te sientes inseguro,
                                permíteme ayudarte. Te proporcionaré una guía detallada que te llevará
                                paso a paso a través del proceso de compra en los sitios web más populares en
                                la actualidad.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_5">
                                    <i class="fa fa-play  play-2"></i>
                                </button>

                                <audio id="audio_paso_5" controls hidden
                                    src="./audio/GUIA .mp3">
                                    <source id="audioSource" type="audio/webm"
                                        src="./audio/GUIA .mp3">
                                </audio>
                            </div>
                            <a href="{{route('mercado.libre')}}" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente">Guia Mecardo Libre</a>
                            <a href="./pdf/mercadoLibre.pdf" target="_blank" download="MercadoLibre-Guia.pdf">
                                <button class="btn btn-primary">Descargar Guia Pdf</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

<script src="{{asset('assets/js/pag2.js')}} "></script>

@endsection
