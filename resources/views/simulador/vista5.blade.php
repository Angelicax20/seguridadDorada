<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 5</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts.js"></script>
</head>

<body>
    @include('simulador.styles')

    <form action="{{ route('save.card') }}" method="POST">
        @csrf
        <div class="container">


            <!-- ventana izquierda-->
            <div class="container_left">

                <div class="int">
                    <div class="int_left">
                        <label for="numTarjeta">Numero de tarjeta</label>
                        <br>
                        <input class="txtTarjeta" type="number" name="numtarjeta" id="numTarjeta">
                        <label for="nombres">Nombre de tarjeta</label>
                        <br>
                        <input class="txtTarjeta" type="text" name="nombres" id="nombres"
                            placeholder="como aparece en la tarjeta">
                        <div class="data_expire">
                            <div>
                                <label for="dateExpire">Fecha de vencimiento</label>
                                <br>
                                <input class="txtTarjeta" type="date" name="dateexpire" id="dateExpire">
                            </div>
                            <div>
                                <label for="codSegurity">Codigo de seguridad</label>
                                <br>
                                <input class="txtTarjeta" type="number" name="codsegurity" id="codSegurity">
                            </div>
                            <input type="hidden" name="type" value="CREDIT">
                            <div>
                                <label for="typedoc">Tipo</label>
                                <br>
                                <select class="txtTarjeta" name="documenttype" id="">
                                    <option value="CC">Cedula de ciudadania</option>
                                    <option value="CE">Cedula de extrajero</option>
                                    <option value="TI">Tarjeta de identidad</option>
                                </select>
                            </div>
                            <div>
                                <label for="DNI">Cedula de ciudadania</label>
                                <br>
                                <input class="txtTarjeta" type="number" name="DNI" id="DNI">
                            </div>
                        </div>



                    </div>

                    <div class="int_right">
                        <div class="div_card">
                            <img class="credit_card" src="{{ asset('assets/css/storage/Creditcard.webp') }}"
                                alt="">
                        </div>

                    </div>
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
                <button type="submit">Finalizar Pago</button>
            </div>


        </div>
    </form>
</body>

</html>
