<!DOCTYPE html>

<head>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orienta&display=swap" rel="stylesheet">
    <script src="scripts.js"></script>
</head>

<body>
    @include('simulador.styles')
    <div class="page-nav d-flex">
        <div class="logo">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/css/storage/logo.svg') }}"
                    alt="" width="60rem"></a>
        </div>
        <div class="tienda">
            <h1>Tienda</h1>
        </div>

        <form id="payment-form">
            @csrf
            <meta name="csrf-token" content="{{ csrf_token() }}">
            {{-- <button id="checkout" class="button-checkout" onclick="pay()">Pagar</button> --}}
        </form>
    </div>
    <div class="page-content">
        @foreach ($products as $product)
            <div class="product-container">
                <form action="{{ route('shop.pay', $product->id) }}" method="POST">
                    @csrf
                    <h3>{{ $product->title }}</h3>
                    <img src="{{ asset($product->image) }}" />
                    <input type="hidden" name="product" value="{{ $product->price }}">
                    <h1>{{ $product->price }}.000</h1>
                    <button class="button-add" type="submit">Pagar</button>
                    {{-- <button class="button-add" onclick="add('product-1', 50)">Agregar</button> --}}
                </form>
            </div>
        @endforeach
    </div>
    @include('simulador.scripts')
</body>
