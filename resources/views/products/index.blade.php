@extends('layouts.admin')

@section('content')
    @include('layouts.navar')
    @include('simulador.styles')

    <div class="col-md-12">
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
        <div class="d-flex justify-content-center items-center my-5">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body" style="color: black">
                        <form action="{{ route('admin.saveProduct') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="d-flex">
                                <div class="col-6">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="">Nombre</label>
                                            <input type="text" class="form-control" name="name" id="name">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="">Imagen</label>
                                            <input type="file" class="form-control" name="imagen" id="image">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="">Monto</label>
                                            <input type="number" class="form-control" name="monto" id="amount">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Guardar</button>

                                </div>

                                <div class="col-6">
                                    <div class="page-content">
                                        <div class="product-container">
                                            <h3 id="product-name" class="product-title">name</h3>
                                            <img id="product-image"
                                                src="https://cdn.pixabay.com/photo/2017/01/25/17/35/picture-2008484_1280.png" />
                                            <h1 id="product-amount">000.000</h1>
                                        </div>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(() => {
                const $nameInput = $('#name');
                const $imageInput = $('#image');
                const $amountInput = $('#amount');

                const $productNameEl = $('#product-name');
                const $productImageEl = $('#product-image');
                const $productAmountEl = $('#product-amount');


                $nameInput.on('change', () => {
                    const name = $nameInput.val() || '---';
                    $productNameEl.text(name);
                });

                // Actualizar contenido al cambiar el monto
                $amountInput.on('change', () => {
                    const amount = parseFloat($amountInput.val()).toFixed(3) || '---';
                    $productAmountEl.text(amount);
                });

                // Mostrar la imagen seleccionada
                $imageInput.on('change', () => {
                    const reader = new FileReader();

                    reader.onload = () => {
                        $productImageEl.attr('src', reader.result);
                    };

                    reader.readAsDataURL($imageInput.prop('files')[0]);
                });

            });
        </script>
    @endsection
