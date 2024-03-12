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
                    <div class="welcome-first-compra animate" data-animate="fadeInUp">
                        <h3>Paso 7: Verificar la Reputación del Vendedor </h3>
                        <h4>
                            <ol>
                                <li>En la página del producto, encontrarás información sobre el vendedor, incluyendo
                                    su reputación.</li>
                                <li>Asegúrate de que el vendedor tenga una buena reputación, con calificaciones y
                                    comentarios positivos.</li>
                            </ol>
                        </h4>
                        <div>
                            <button class="play-button mb-3" id="play_paso_1">
                                <i class="fa fa-play play"></i>
                            </button>

                            <audio id="audio_paso_1" controls hidden
                                src="./audio/PASO 3.7 .mp3">
                                <source id="audioSource" type="audio/webm"
                                    src="./audio/PASO 3.7 .mp3">
                            </audio>
                        </div>
                        <a href="#slide02" class="btn btn-primary animate btn-scroll">Siguiente </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section animated-row" data-section="slide02">
            <div class="section-inner">
                <div class="row justify-content-center">
                    <div class="col-md-8 wide-col-laptop">
                        <!-- Guia Introducion -->
                        <div class="title-block animate intro" data-animate="fadeInUp">
                            <h2> Paso 8: Hacer Preguntas al Vendedor</h2>
                            <h4>
                                <ol>
                                    <li>Si tienes preguntas sobre el producto, puedes hacer clic en "Hacer una
                                        pregunta al vendedor."</li>
                                    <li>Escribe tus preguntas y el vendedor te responderá a través de la plataforma.
                                    </li>
                                </ol>
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_2">
                                    <i class="fa fa-play play-6"></i>
                                </button>

                                <audio id="audio_paso_2" controls hidden
                                    src="./audio/PASO 3.8 .mp3">
                                    <source id="audioSource" type="audio/webm"
                                        src="./audio/PASO 3.8 .mp3">
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
                            <h2> Paso 9: Verificar la Seguridad del Sitio</h2>
                            <h4>
                                Antes de ingresar información sensible, verifica que el sitio web sea seguro:
                                Busca un candado en la barra de direcciones.

                                Asegúrate de que la URL comience con <a href="https://www.mercadolibre.com.co.">
                                    "https://www.mercadolibre.com.co."</a>
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_3">
                                    <i class="fa fa-play play-4"></i>
                                </button>

                                <audio id="audio_paso_3" controls hidden
                                    src="./audio/PASO 3.9 .mp3">
                                    <source id="audioSource" type="audio/webm"
                                        src="./audio/PASO 3.9 .mp3">
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
                            <h2> Paso 10: Comprar el Producto</h2>
                            <h4>
                                Si estás satisfecho con el producto y el vendedor, puedes proceder a comprarlo:

                                Haz clic en el botón "Comprar ahora" o "Agregar al carrito," dependiendo de tu
                                preferencia.
                                Sigue las instrucciones para completar la compra, proporcionando la dirección de
                                envío y la
                                forma de pago. Puedes utilizar métodos seguros como tarjeta de crédito, débito o
                                PayPal.

                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_4">
                                    <i class="fa fa-play play-4"></i>
                                </button>

                                <audio id="audio_paso_4" controls hidden
                                    src="./audio/PASO 3.10 .mp3">
                                    <source id="audioSource" type="audio/webm"
                                        src="./audio/PASO 3.10 .mp3">
                                </audio>
                            </div>
                            <a href="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2Fsf4i4CGLzpmYOiSlzdRsGX%2FCompra%3Ftype%3Ddesign%26node-id%3D2-88%26t%3D6rwQHD9M1ZwxBYjl-1%26scaling%3Dscale-down%26page-id%3D0%253A1%26starting-point-node-id%3D2%253A174%26show-proto-sidebar%3D1%26mode%3Ddesign" target="_blank"
                                    download="GuiaCrearUsuario.pdf"><!-- Agregar Guia o enlace nuevo -->
                                <button class="btn btn-primary">Ir a Guia en Linea </button>
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
                            <h2> Paso 11: Confirmación y Seguimiento</h2>
                            <h4>
                                Revisa tu pedido y la información de envío antes de confirmar la compra, después de
                                la compra,
                                podrás hacer seguimiento a tu pedido desde tu cuenta. Recibirás notificaciones por
                                correo
                                electrónico sobre el estado de la entrega.
                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_5">
                                    <i class="fa fa-play play-6"></i>
                                </button>

                                <audio id="audio_paso_5" controls hidden
                                    src="./audio/PASO 3.11 .mp3">
                                    <source id="audioSource" type="audio/webm"
                                        src="./audio/PASO 3.11 .mp3">
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
                            <h2>Paso 12: Recibir tu Producto</h2>
                            <h4>
                                Cuando recibas tu producto, verifica que sea lo que esperabas. Si hay algún
                                problema,
                                comunícate con el vendedor o el soporte de Mercado Libre.

                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_6">
                                    <i class="fa fa-play play"></i>
                                </button>

                                <audio id="audio_paso_6" controls hidden
                                    src="./audio/PASO 3.12 .mp3">
                                    <source id="audioSource" type="audio/webm"
                                        src="./audio/PASO 3.12 .mp3">
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
                            <h2>Nota Extra</h2>
                            <h4>
                                Ahora es turno de que te familiarices con los métodos de pago en internet,
                                para esto te recomiendo que vayas a nuestro simulador de pago.

                            </h4>
                            <div>
                                <button class="play-button mb-3" id="play_paso_7">
                                    <i class="fa fa-play play"></i>
                                </button>

                                <audio id="audio_paso_7" controls hidden
                                    src="./audio/NotaExtra .mp3">
                                    <source id="audioSource" type="audio/webm"
                                        src="./audio/NotaExtra .mp3">
                                </audio>
                            </div>
                            <a href="{{route('home')}}" class="btn btn-s btn-secondary animate btn-select"
                                data-tipo="Siguiente"> Menú Principal </a>
                            <a href="#" class="btn btn-s btn-secondary animate btn-select" data-tipo="Siguiente">
                                simulador </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection