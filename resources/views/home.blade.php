@extends('layouts.app')

<body>
    <header>
        @include('layouts.navbar')
    </header>

    <div id="main" class="container">
    </div>

    @section('content')
        <div class="row">
            <div class="col-md-4 offset-md-10">
                <div class="card text-white bg-dark  mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{ 'Bienvenue: ' }}
                        <a class="nav-link"> {{ Auth::user()->name }}</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ 'Vous ête connecté!' }}
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        @include('layouts.footer')
    </body>
@endsection
