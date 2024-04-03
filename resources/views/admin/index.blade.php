@extends('layouts.admin')

@section('content')
    @include('layouts.navar')


    <div id="fullpage" class="fullpage-default">
        <div class="content">
            <div class="col-md-12">
                <div class="d-flex justify-content-center items-center my-5">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body" style="color: black">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <th scope="row">{{ $item->id }}</th>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>
                                                    <a href="{{ route('admin.userDetail', $item->id) }}"
                                                        class="btn btn-primary">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>


    </div>
@endsection
