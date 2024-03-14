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
                            <!-- <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                <li data-menuanchor="slide01" class="active"><a href="#slide01">Inicio</a></li>
                                <li data-menuanchor="slide02"><a href="#slide02">Guia</a></li>
                                <li data-menuanchor="slide03"><a href="#slide03">Simulador</a></li>
                            </ul> -->
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
                    <h1 class="welcome-first animate" data-animate="fadeInUp"> Mercado Libre Colombia </h1>
                    <h1 class="welcome-title animate" data-animate="fadeInUp">Manual de Uso Seguro </h1>
                    <p class="animate" data-animate="fadeInUp">Aprende a protegerte de estafas en línea. Nuestra
                        plataforma educativa para adultos mayores te enseñará cómo evitar ser víctima de fraudes al
                        hacer compras en internet. Además, podrás practicar con nuestro simulador de pago para
                        experimentar cómo se aplica en la realidad. ¡Protege tu seguridad en línea con Seguridad
                        Dorada!
                    </p>
                    <a href="#slide02" class="btn btn-primary animate btn-scroll">Iniciar Curso</a>
                </div>
            </div>
        </div>


        <div class="section animated-row" data-section="slide02">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <!-- Guia Introducion -->
                        <div class="title-block animate intro" data-animate="fadeInUp">
                            <h2>Paso 1: Buscar la página</h2>
                            <h4>
                                <ol>
                                    <li>Enciende tu computadora o dispositivo y asegúrate de estar conectado a
                                        Internet.</li>
                                    <li>Abre tu navegador web favorito (como Google Chrome, Mozilla Firefox, o
                                        Microsoft Edge).</li>
                                    <li>En la barra de direcciones, escribe www.mercadolibre.com.co y presiona
                                        "Enter" en tu teclado.</li>
                                </ol>
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_1">
                                    <i class="fa fa-play play-4"></i>
                                </button>

                                <audio id="audio_paso_1" controls hidden
                                    src="{{asset('assets/css/storage/audio/PASO 3.1 .mp3')}}">
                                    <source id="audioSource" type="audio/webm"
                                        src="{{asset('assets/css/storage/audio/PASO 3.1 .mp3')}}">
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
                            <h2>Paso 2: Crear una Cuenta o Iniciar Sesión</h2>
                            <h4> En diversas plataformas de comercio electrónico, se te solicitará crear una cuenta
                                de usuario. Esta cuenta no solo almacena tus datos personales, sino también tu
                                historial de compras,de esta manera, en futuras visitas podrás iniciar sesión sin
                                tener que repetir todo el proceso, facilitando así una experiencia de compra más
                                fluida y personalizada. <br>

                                Te dejamos la guia de como crear una cuento o iniciar sesión paso a paso

                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_2">
                                    <i class="fa fa-play play-2"></i>
                                </button>

                                <audio id="audio_paso_2" controls hidden
                                    src="{{asset('assets/css/storage/audio/PASO 3.2 .mp3')}}">
                                    <source id="audioSource" type="audio/webm"
                                        src="{{asset('assets/css/storage/audio/PASO 3.2 .mp3')}}">
                                </audio>
                            </div>
                            <a href="#slide04" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente">Siguiente</a> 
                            <a href="assets/css/storage/pdf/Descargar-Guia.pdf" target="_blank" download="GuiaCrearUsuario.pdf">
                                <button class="btn btn-primary">Descargar Guia Pdf</button>
                            </a>
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
                            <h2>Paso 3: Explorar el Sitio</h2>
                            <h4> Una vez que hayas iniciado sesión, estarás en la página principal de Mercado Libre.
                                Aquí encontrarás categorías como "Electrónica," "Hogar," "Moda," entre otras.
                                Para explorar productos en una categoría, haz clic en la categoría que te interese.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_3">
                                    <i class="fa fa-play play-2"></i>
                                </button>

                                <audio id="audio_paso_3" controls hidden
                                    src="{{asset('assets/css/storage/audio/PASO 3.3 .mp3')}}">
                                    <source id="audioSource" type="audio/webm"
                                        src="{{asset('assets/css/storage/audio/PASO 3.3 .mp3')}}">
                                </audio>
                            </div>
                            <a href="#slide05" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente">Siguiente</a>
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
                            <h2>Paso 4: Buscar un Producto</h2>
                            <h4> Utiliza la barra de búsqueda en la parte superior de la página.
                                Escribe el nombre o tipo de producto que deseas encontrar, luego haz clic en la lupa
                                de búsqueda o presiona "Enter" en tu teclado.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_4">
                                    <i class="fa fa-play play-2"></i>
                                </button>

                                <audio id="audio_paso_4" controls hidden
                                    src="{{asset('assets/css/storage/audio/PASO 3.4 .mp3')}}">
                                    <source id="audioSource" type="audio/webm"
                                        src="{{asset('assets/css/storage/audio/PASO 3.4 .mp3')}}">
                                </audio>
                            </div>
                            <a href="#slide06" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente">Siguiente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide06">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <!-- Guia Introducion -->
                        <div class="title-block animate intro" data-animate="fadeInUp">
                            <h2>Paso 5: Seleccionar un Producto</h2>
                            <h4>
                                Navega por los resultados de búsqueda y haz clic en el producto que te interesa
                                para obtener más detalles.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_5">
                                    <i class="fa fa-play play"></i>
                                </button>

                                <audio id="audio_paso_5" controls hidden
                                    src="{{asset('assets/css/storage/audio/PASO 3.5 .mp3')}}">
                                    <source id="audioSource" type="audio/webm"
                                        src="{{asset('assets/css/storage/audio/PASO 3.5 .mp3')}}">
                                </audio>
                            </div>
                            <a href="#slide07" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente">Siguiente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide07">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <!-- Guia Introducion -->
                        <div class="title-block animate intro" data-animate="fadeInUp">
                            <h2> Paso 6: Leer la Descripción del Producto </h2>
                            <h4>
                                En la página del producto, lee detenidamente la descripción del producto, prestando
                                atención
                                a los detalles, precio, estado del producto (nuevo, usado), y ubicación del
                                vendedor.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_6">
                                    <i class="fa fa-play play-4"></i>
                                </button>

                                <audio id="audio_paso_6" controls hidden
                                    src="{{asset('assets/css/storage/audio/PASO 3.6 .mp3')}}">
                                    <source id="audioSource" type="audio/webm"
                                        src="{{asset('assets/css/storage/audio/PASO 3.6 .mp3')}}">
                                </audio>
                            </div>
                            <a href="{{route('manual.mercado')}}" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente">Siguiente</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="{{asset('assets/js/pag3.js')}}"></script>

@endsection