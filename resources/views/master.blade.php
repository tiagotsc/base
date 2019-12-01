    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <title>App</title>
    </head>
    
    <body>
        <div class="jumbotron text-center">
            <h1>App</h1>
            @section('sidebar')
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('users.index')}}">Listar usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.create')}}">Cadastrar usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </nav>
            @show
        </div>
                
        <div class="container">
            @if (session('alertMessage'))
                @php
                    $alert = explode('|',session('alertMessage'));
                @endphp
                <div class="alert {{ $alert[0] }} alert-dismissible fade show" role="alert">
                    {{ $alert[1] }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endisset
            @foreach ($errors->all() as $message)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach


            @section('content')
            <div class="row">
                <div class="col-sm">
                One of three columns
                </div>
                <div class="col-sm">
                One of three columns
                </div>
                <div class="col-sm">
                One of three columns
                </div>
            </div>
            @show
        </div>
        
        @section('footerScripts')
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        @show
    </body>
    </html>