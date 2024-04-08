<!DOCTYPE html>

<head>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orienta&display=swap" rel="stylesheet">
    <script src="scripts.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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
    @if (session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="page-content">
        @foreach ($products as $product)
            <div class="product-container">
                <form action="{{ route('shop.pay', $product->id) }}" method="POST">
                    @csrf
                    <h3>{{ $product->title }}</h3>
                    <img src="{{ asset('/storage/products/' . $product->image) }}" />
                    <input type="hidden" name="product" value="{{ $product->price }}">
                    <h2>{{ $product->price }}.000</h2>
                    <button class="button-add" type="submit">Pagar</button>
                </form>
                @if (Auth::user()->id == 1)
                    <a class="button-edit" href="{{ route('admin.products.edit', $product->id) }}">Editar</a>
                @endif
            </div>
        @endforeach
    </div>
    @include('simulador.scripts')
</body>
