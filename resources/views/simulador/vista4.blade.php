<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 4</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts.js"></script>
</head>

<body>
    @include('simulador.styles')
    <div class="container" style="height: 115vh !important;">
        <div class="container_left">
            <h2>¿Como quieres pagar? </h2>

            <h4>Con mercado pago</h4>
            <a href="{{route('shop.cardView', $price)}}">
                <div class="mercado_pago" style="display: flex !important;">
                    <div class="icon-container">
                        <img src="images/product-1.jpg" alt="">
                    </div>
                    <p>Nueva tarjeta de credito </p>
                </div>
            </a>

            <hr class="divider">
            <div class="mercado_pago">
                <input type="radio" />
                <div class="icon-container">
                    <img src="images/product-1.jpg" alt="">
                </div>
                <p>Nueva tarjeta de credito </p>
            </div>

            <h4>Con otras formas de pago</h4>
            <div class="mercado_pago">
                <input type="radio" />
                <div class="icon-container">
                    <img src="images/product-1.jpg" alt="">
                </div>
                <p>Nueva tarjeta de credito </p>
            </div>

        </div>

        <!-- ventana derecha-->
        <div class="container_right">
            <h3>Resumen de compra</h3>
            <hr class="divider">
            <div class="price-container">
                <div class="price">
                    <h3>producto</h3>
                </div>
                <div class="price">
                    <h3>${{ $price }}</h3>
                </div>
                <div class="price">
                    <h3>Envio</h3>
                </div>
                <div class="price">
                    <h4 style="color: #33802a">Gratis</h4>
                </div>
            </div>

            <hr class="divider">
            <div class="price-container">
                <div class="price">
                    <h3>Pagas</h3>
                </div>
                <div class="price">
                    <h2>${{ $price }}</h2>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
