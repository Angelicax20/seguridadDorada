@extends('layouts.admin')

@section('content')
    @include('layouts.navar')
    <style>
        .h-28-rem {
            height: 20rem;
        }
    </style>
    <div class="content">
        <div class="col-md-12">
            <div class="d-flex justify-content-center items-center my-5 aling-items">
                <div class="col-md-6">
                    <div class="card h-28-rem">
                        <div class="card-header" style="color: black">
                            <h4>Direccion</h4>
                        </div>
                        <div class="card-body" style="color: black">
                            <div class="d-flex">
                                <div class="col-6">
                                    <p>Ciudad : <span>{{ $address ? $address->city : 'Vacio' }}</span></p>
                                </div>
                                <div class="col-6">
                                    <p>Calle : <span>{{ $address ? $address->street : 'Vacio' }}</span></p>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="col-6">
                                    <p>Numero de Calle : <span># {{ $address ? $address->number_street : 'Vacio' }}</span>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p>Numero de Casa : <span># {{ $address ? $address->number_home : 'Vacio' }}</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-12">
                                    <p>Departamento : <span>{{ $address ? $address->department : 'Vacio' }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-28-rem">
                        <div class="card-header" style="color: black">
                            <h4>Tarjeta</h4>
                        </div>
                        <div class="card-body" style="color: black">
                            <div class="d-flex">
                                <div class="col-6">
                                    <p>Nombre de la Tarjeta : <span>{{ $card ? $card->name : 'Vacio' }}</span></p>
                                </div>
                                <div class="col-6">
                                    <p>Numero : <span>{{ $card ? $card->number : 'Vacio' }}</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-6">
                                    <p>Fecha de Vencimiento : <span>{{ $card ? $card->expiration_date : 'Vacio' }}</span>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p>Codigo : <span>{{ $card ? $card->code : 'Vacio' }}</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-6">
                                    <p>Documento : <span>{{ $card ? $card->document : 'Vacio' }}</span></p>
                                </div>
                                <div class="col-6">
                                    <p> Tipo de Documento : <span>{{ $card ? $card->type_document : 'Vacio' }}</span></p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-12">
                                    <p>Tipo : <span>{{ $card ? $card->type : 'Vacio' }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-center items-center my-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="color: black">
                            <h4>Pasos Completados</h4>
                        </div>
                        <div class="card-body" style="color: black">
                            <div class="text-center">
                                <h5>{{ $datos }}</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
