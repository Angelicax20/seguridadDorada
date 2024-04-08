<style>
    body {
        margin: 0;
        background-color: aliceblue;
        font-family: 'Nerko One', cursive;
    }

    button {
        font-size: 16px;
        text-align: center;
        border-radius: 8px;
        padding: 10px 20px;
    }

    .tienda {
        margin-left: 40%;
    }

    .logo {
        width: 10%;

    }

    .page-nav {
        background-color: #21f38e;
        border: 1px solid rgb(154, 147, 147);
        position: relative;
    }

    .page-nav h1 {
        margin: 20px;
    }

    .button-checkout {
        background-color: white;
        color: black;
        border: 2px solid #008CBA;
        /* Blue */
        transition-duration: 0.4s;
        position: absolute;
        right: 15px;
        bottom: 15px;
    }

    .button-checkout:hover {
        background-color: #008CBA;
        /* Blue */
        color: white;
    }

    .page-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
    }

    .product-container {
        margin: 15px;
        padding: 2px 16px;
        position: relative;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
        background-color: white;
    }

    .product-container:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .product-container img {
        width: 300px;
    }

    .product-container h1 {
        margin-bottom: 10px;
        margin-left: 15px;
    }

    .button-add {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50;
        /* Green */
        transition-duration: 0.4s;
        position: absolute;
        right: 15px;
        bottom: 10px;
    }

    .button-add:hover {
        background-color: #4CAF50;
        /* Green */
        color: white;
    }

    .button-edit {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50;
        transition-duration: 0.4s;
        position: absolute;
        right: 105px;
        bottom: 10px;
        font-size: 16px;
        text-align: center;
        border-radius: 8px;
        padding: 8px 15px;

    }

    .button-edit:hover {
        background-color: #4CAF50;
        /* Green */
        color: white;
    }

    .orienta-regular {
        font-family: "Orienta", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .container {
        background-color: red;
        display: grid;
        grid-template-columns: 4fr 2fr;
        height: 100vh;
    }

    .container-1 {
        background-color: red;
        display: grid;
        height: 100vh;
    }

    .container_left {
        background-color: #bababa;
        padding-top: 40px;
        padding-left: 10px;
        padding-right: 40px;
    }

    .entrega_main {
        /* Ancho del div */
        height: 230px;
        /* Alto del div */
        background-color: #f0f0f0;
        /* Color de fondo del div */
        border-radius: 20px;
        /* Radio de las esquinas */
        padding-top: 10px;
        padding-left: 50px;
        padding-right: 10px;
        box-sizing: border-box;
        /* Incluir padding en el ancho y alto */
    }

    .option {
        display: grid;
        grid-template-columns: 7fr 1fr;
        grid-auto-rows: 1fr;
        grid-column-gap: 0;
        grid-row-gap: 0;
    }

    .entrega_title {
        display: grid;
        grid-template-rows: 1fr 1fr;
        grid-template-columns: 1fr 1fr;
        gap: 0;
    }

    .radio_option {
        padding-top: 30px;
    }

    .lbl_radio_option {
        font-size: 18px;
        font-weight: bold;
    }

    .radio_text {
        grid-row-start: 2;
        grid-column-start: 1;
        grid-row-end: 3;
        grid-column-end: 3;
        justify-content: start;
    }

    .entrega_text {
        padding-top: 20px;
        color: #33802a;
        font-size: 20px;
    }

    .btn_editar {
        display: inline-block;
        padding: 10px 20px;
        background-color: #f0f0f0;
        /* Color de fondo */
        color: #185fd1;
        /* Color del texto */
        text-decoration: none;
        /* Quita el subrayado del texto */
        border-radius: 5px;
        /* Esquinas redondeadas */
    }

    .btn_editar:hover {
        color: rgba(95, 140, 211, 0.93);
        /* Cambia el color de fondo al pasar el ratón */
    }

    .container_right {
        background-color: #e5e2e2;
        padding-top: 40px;
        padding-left: 60px;
        padding-right: 30px;
    }

    .divider {
        border: none;
        border-top: 1px solid #ccc;
        /* Estilo y color de la línea */
        margin: 20px 0;
        /* Espacio alrededor del divider */
    }

    .price-container {
        display: grid;
        grid-template-columns: 3fr 1fr;
        grid-auto-rows: 1fr;
    }

    .button_main {
        margin-top: -20px;
        position: relative;
    }

    .btn_payment {
        background-color: white;
        color: black;
        border: 2px solid #008CBA;
        /* Blue */
        transition-duration: 0.4s;
        position: absolute;
        right: 15px;
    }

    .data_per {
        height: 300px;
        /* Alto del div */
        background-color: #f0f0f0;
        /* Color de fondo del div */
        border-radius: 20px;
        /* Radio de las esquinas */
        padding-top: 10px;
        padding-left: 50px;
        padding-right: 10px;
        box-sizing: border-box;
    }

    .txtName {
        width: 50%;
        height: 25px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid rgba(114, 115, 118, 0.6);
    }

    .dir_phone {
        margin-top: 10px;
        margin-bottom: 10px;
        width: 80%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    .txtPhone {
        width: 100%;
        height: 25px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid rgba(114, 115, 118, 0.6);
    }

    .button_main_second {
        margin-top: 10px;
        position: relative;
    }

    .btn_continue {
        background-color: #185fd1;
        color: white;
        border: none;
        /* Blue */
        transition-duration: 0.4s;
        position: absolute;
        left: 15px;
    }

    .btn_add {
        background-color: rgba(141, 175, 230, 0.39);
        color: #0a60ec;
        border: none;
        /* Blue */
        transition-duration: 0.4s;
        position: absolute;
        left: 130px;
    }

    .mercado_pago {
        height: 130px;
        /* Alto del div */
        background-color: #f0f0f0;
        /* Color de fondo del div */
        border-radius: 20px;
        /* Radio de las esquinas */
        padding-top: 10px;
        padding-left: 50px;
        padding-right: 10px;
        box-sizing: border-box;
        display: grid;
        /* Incluir padding en el ancho y alto */
        grid-template-columns: 0.5fr 1fr 12fr;
        align-items: center;

    }

    .icon-container {
        width: 50px;
        /* ajusta según sea necesario */
        height: 50px;
        /* ajusta según sea necesario */
        border-radius: 50%;
        /* hace que el contenedor sea redondo */
        overflow: hidden;
        /* asegura que la imagen no sobresalga del contenedor */
    }

    .icon-container img {
        width: 100%;
        /* asegura que la imagen llene el contenedor */
        height: 100%;
        /* asegura que la imagen llene el contenedor */
        object-fit: cover;
        /* ajusta la imagen para cubrir el contenedor */
    }

    .int {
        height: 80vh;
        background-color: #fafbfa;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin: 10px;
        padding: 20px;
    }

    .int_left {
        justify-content: center;
        align-content: center;
    }

    .txtTarjeta {
        width: 100%;
        height: 35px;
        margin-top: 5px;
        margin-bottom: 5px;
        border-radius: 5px;
        border: 1px solid rgba(114, 115, 118, 0.6);
    }

    .data_expire {
        margin-top: 10px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        gap: 10px;

    }

    .int_right {
        justify-content: center;
        align-content: center;
    }

    .div_card {
        height: 200px;
        width: 100%;
        border-radius: 10px;
    }

    .credit_card {
        height: 100%;
        width: 100%;
    }

    .alert {
        position: relative;
        padding: 1rem 1rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;
    }

    .alert-success {
        color: #0f5132;
        background-color: #d1e7dd;
        border-color: #badbcc;
    }
</style>
