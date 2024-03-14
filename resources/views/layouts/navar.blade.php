<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="content d-flex mx-5"  >
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('assets/css/storage/logo.svg') }}" alt="" width="60rem"></a>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    {{-- <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li> --}}
                </ul>
            </div>

            {{-- <div class="d-flex justify-content-end"> --}}
                <ul class="navbar-nav mr-auto">
                    @if (Auth::user() != null)

                    <li class="nav-item active">
                        <a class="nav-link" href="#">{{Auth::user()->name}}</a>
                    </li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="mx-1 btn btn-light" type="submit">Salir</button>
                      </form>
                    @else
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registro</a>
                    </li>
                    @endif
                </ul>
            {{-- </div> --}}
        </div>

    </nav>