<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 1</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="scripts.js"></script>
</head>

<body>
    <div class="container">

        <div class="container_left">
            <h2>Mis Domicilios</h2>

            <div class="entrega_main">
                <div class="option">
                    <div class="entrega_title">
                        <div class="radio_option">
                            <input type="radio" id="opcion1" name="opcion" value="opcion1">
                            <label for="opcion1" class="lbl_radio_option">Entrega a domicilio</label>
                        </div>
                        <div class="radio_text">
                            <p>Calle 23 # 33 - 34 </p>
                        </div>
                    </div>
                    <div class="entrega_text">
                        <p>Gratis</p>
                    </div>
                </div>
                <a class = "btn_editar"> Editar</a>
            </div>
            <br>
            <div class="button_main_second">
                <button id="continue" class="btn_continue" onclick="pay()">Continuar</button>
                <button id="add" class="btn_add" onclick="pay()">Agregar domicilio</button>
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
        </div>

    </div>

</body>

</html>
