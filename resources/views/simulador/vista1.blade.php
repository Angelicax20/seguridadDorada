<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 1</title>

</head>

<body>
    @php
        $dato = request();

    @endphp
    @include('simulador.styles')
    @include('simulador.scripts')

    <div class="container">

        <div class="container_left">
            <h2>Elige la forma de entrega</h2>

            <div class="entrega_main">
                <div class="option">
                    <div class="entrega_title">
                        <div class="radio_option">
                            <input type="radio" id="opcion1" name="opcion" value="opcion1">
                            <label for="opcion1" class="lbl_radio_option">Entrega a domicilio</label>
                        </div>
                        @if ($address != null)
                            <div class="radio_text">
                                <p>{{ $address->department }} {{ $address->city }} {{ $address->street }}
                                    {{ $address->number_street }} {{ $address->number_home }}</p>
                            </div>
                        @else
                            <div class="radio_text">
                                <p>Calle 23 # 33 - 34 </p>
                            </div>
                        @endif
                    </div>
                    <div class="entrega_text">
                        <p>Gratis</p>
                    </div>
                </div>

                <hr class="divider">
                <a class="btn_editar" href="{{ route('shop.addressView', $product->price) }}"> Edita o eligir otro
                    domicilio</a>

            </div>
            <br>
            <div class="entrega_main">
                <div class="option">
                    <div class="entrega_title">
                        <div class="radio_option">
                            <input type="radio" id="opcion2" name="opcion" value="opcion1">
                            <label for=opcion2 class="lbl_radio_option">
                                Retirar en el domicilio del vendedor
                            </label>
                        </div>
                        <div class="radio_text">
                            <p>Calle 23 # 33 - 34 </p>
                        </div>
                    </div>
                    <div class="entrega_text">
                        <p>Gratis</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="button_main">
                <form action=" {{ route('shop.card') }}" method="POST">
                    @csrf
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <button id="payment" class="btn_payment">Pagar</button>
                </form>
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
                    <h3>${{ $product->price }}.000</h3>
                </div>
            </div>
            <hr class="divider">
            <div class="price-container">
                <div class="price">
                    <h3>Pagas</h3>
                </div>
                <div class="price">
                    <h2>${{ $product->price }}.000</h2>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
