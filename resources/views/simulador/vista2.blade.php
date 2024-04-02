<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 2</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts.js"></script>
</head>

<body>
    @php
        $price = request()->all();

        $price = json_encode($price);
        $len = strlen($price);
        $contador = 0;
        $array = [];

        for ($i = 0; $i < $len; $i++) {
            //Esta variable obtiene el carácter que vamos recorriendo del $string
            $val = substr($price, $i, 1);
            //Se valida si el carácter equivale a "
    if ($val == '"') {
                //Se adiciona +1 a las comillas encontradas
                $contador++;
                //Guardamos la posición de la comilla en el array
                $array[] = $i + 1;
            }
        }
        $posicion = 0;
        //Mientras el contador de comillas sea mayor a 1 se hace el loop
        while ($contador > 1) {
            //imprime el texto entre las posiciones de las comillas del array con el valor de $posicion
            $dato = substr($price, $array[$posicion], $array[$posicion + 1] - $array[$posicion] - 1);
            //restamos 2 al contador para ir condicionando el while
            $contador = $contador - 2;
            //adicionamos 2 a la posición para consultas las siguientes 2 comillas
            $posicion = $posicion + 2;
        }
    @endphp
    @include('simulador.styles')
    <div class="container-1">

        <div class="container_left">
            <form action="{{ route('shop.address') }}" method="POST">
                @csrf
                <h2>Agregar domicilio</h2>

                <div class="data_per">
                    <label for="name">Departamento</label>
                    <br>
                    <input class="txtName" id='name' type="text" name="deparmento" placeholder="Departemento"
                        required autofocus>

                    <div class="dir_phone">
                        <div class="dir">
                            <label for="dir1">Ciudad</label>
                            <br>
                            <input class="txtPhone" id='dir1' name="ciudad" type="text" placeholder="Direccion"
                                required autofocus>
                        </div>
                        <div class="phone">
                            <label for="phone">Calle</label>
                            <br>
                            <input class="txtPhone" name="calle" id='phone' type="text" placeholder="Calle"
                                required autofocus>
                        </div>
                    </div>

                    <label for="refered">Numero de Casa</label>
                    <br>
                    <input class="txtName" id='refered' name="nrcasa" type="text" placeholder="Numero de Casa"
                        required autofocus>
                    <br>
                    <label for="refered">Numero de Calle</label>
                    <br>
                    <input class="txtName" id='refered' name="nrcalle" type="text" placeholder="Numero de Calle"
                        required autofocus>

                </div>

                <br>
                <div class="button_main">
                    <button id="payment" class="btn_payment" type="submit">Continuar</button>
                </div>
            </form>

        </div>

        <!-- ventana derecha-->
        {{-- <div class="container_right">
            <h3>Resumen de compra</h3>
            <hr class="divider">
            <div class="price-container">
                <div class="price">
                    <h3>producto</h3>
                </div>
                <div class="price">
                    <h3>$76.000</h3>
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
                    <h2>$76.000</h2>
                </div>
            </div>
        </div> --}}

    </div>

</body>

</html>
