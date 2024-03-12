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

    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="content d-flex mx-5"  >
            <a class="navbar-brand" href="#"><img src="{{ asset('storage/images/logo.svg') }}" alt="" width="60rem"></a>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    {{-- <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li> --}}
                </ul>
            </div>

            {{-- <div class="d-flex justify-content-end"> --}}
                <ul class="navbar-nav mr-auto">
                    @if (Auth::user() != null)

                    <li class="nav-item active">
                        <a class="nav-link" href="#">{{Auth::user()->name}}</a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="mx-1 btn btn-light" type="submit">Salir</button>
                      </form>
                    @else
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registro</a>
                    </li>
                    @endif
                </ul>
            {{-- </div> --}}
        </div>

    </nav>

    <header id="header">
        <div class="container-fluid d-flex justify-content-center">
            <div class="navbar">
                <div class="navigation-row">
                    <nav id="navigation">
                        <!-- <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button> -->
                        <div class="nav-box navbar-collapse">
                            <a href="#" id="logo" title="Elegance by TemplateMo">
                                <img src="{{ asset('storage/images/logo.svg') }}" alt="" width="120rem">
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
                    <span class="welcome-first animate" data-animate="fadeInUp">Bienvenido al portal</span>
                    <h1 class="welcome-title animate" data-animate="fadeInUp">Seguridad Dorada</h1>
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
                <div class="about-section">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 wide-col-laptop">
                            <div class="animate" data-animate="fadeInUp">
                                <div class="welcome-box">
                                    <div class="mb-5">
                                        <span class="welcome-first animate" data-animate="fadeInUp">Para comenzar el
                                            curso</span>
                                        <h1 class="animate" data-animate="fadeInUp">Selecione una opcion</h1>
                                        <a href="#slide03" class="btn btn-p btn-primary animate btn-select"
                                            data-tipo="guia">Guia</a>
                                        @if (Auth::user() != null )
                                        <a href="#slide01" class="btn btn-s btn-secondary animate btn-select"
                                            data-tipo="simulador">Simulador</a>
                                            
                                        @else
                                        <a href="{{route('login')}}" class="btn btn-s btn-secondary animate btn-select"
                                            data-tipo="simulador">Simulador</a>
                                            
                                        @endif
                                    
                                    </div>
                                    <span
                                        class="welcome-first animated fadeInUp text-option-btn text-p font-weight-bold d-none guia">Necesitas
                                        aprender sobre sitios seguros y como
                                        identificarlos</span>
                                    <span
                                        class="welcome-first animated fadeInUp text-option-btn text-s font-weight-bold d-none simulador">Es
                                        hora de que apliques todo lo aprendido</span>
                                </div>
                            </div>
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
                            <h4>¿Qué debes tener en cuenta al comprar un producto en una tienda en línea?<br>Paso 1:</h4>
                            <h4>Investiga la cantidad de tiempo que la tienda ha estado en línea, el tipo de
                                productos que vende, la ubicación de la misma y las políticas de devolución y
                                reembolso.</h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_1">
                                    <i class="fa fa-play"></i>
                                </button>

                                <audio id="audio_paso_1" controls hidden src="./audio/PASO 1 .mp3">
                                    <source id="audioSource" type="audio/webm" src="./audio/PASO 1 .mp3">
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
                            <h2>Paso 2:</h2>
                            <h4>Revisa los detalles del producto: Verifica todos los detalles del producto, como el
                                tamaño, el color y los materiales. También toma en consideración si la imagen es
                                fiel al producto real.</h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_2">
                                    <i class="fa fa-play play-2"></i>
                                </button>

                                <audio id="audio_paso_2" controls hidden src="./audio/PASO 2 .mp3">
                                    <source id="audioSource" type="audio/webm" src="./audio/PASO 2 .mp3">
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
                            <h2>Paso 3:</h2>
                            <h4>Verifica las opciones de pago: Asegúrate de que la tienda tenga opciones de pago
                                seguras y confiables.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_3">
                                    <i class="fa fa-play"></i>
                                </button>

                                <audio id="audio_paso_3" controls hidden src="./audio/PASO 3 .mp3">
                                    <source id="audioSource" type="audio/webm" src="./audio/PASO 3 .mp3">
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
                            <h2>Paso 4:</h2>
                            <h4>Revisa la información del envío: Asegúrate de conocer los términos y condiciones
                                de envío, incluido el tiempo estimado de entrega y el costo del envío.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_4">
                                    <i class="fa fa-play play"></i>
                                </button>

                                <audio id="audio_paso_4" controls hidden src="./audio/PASO 4 .mp3">
                                    <source id="audioSource" type="audio/webm" src="./audio/PASO 4 .mp3">
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
                            <h2>Paso 5:</h2>
                            <h4>Verifica la política de devoluciones y reembolsos: Asegúrate de entender las
                                políticas de devolución y reembolso de la tienda en línea en caso de que recibas un
                                producto defectuoso o que no cumplas con tus expectativas.</h4>

                            <h4>Nota</h4>
                            <h4>
                                Guarda tus comprobantes y confirma tu orden
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_5">
                                    <i class="fa fa-play play-5"></i>
                                </button>

                                <audio id="audio_paso_5" controls hidden src="./audio/PASO 5 .mp3">
                                    <source id="audioSource" type="audio/webm" src="./audio/PASO 5 .mp3">
                                </audio>
                            </div>
                            <a href="{{ route('guia.compra') }}" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente">Siguiente</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>

    </div>

    <script src="{{ asset('assets/js/pag1.js') }} "></script>


    <script>
        $(document).ready(function() {
            $('#ml_0').click(function(e) {
                $('.intro').addClass('d-none');
                $('.ml_0').removeClass('d-none');
            });

            $('#ex_0').click(function(e) {
                $('.intro').addClass('d-none');
                $('.ex_0').removeClass('d-none');
            });

        })
    </script>
@endsection
