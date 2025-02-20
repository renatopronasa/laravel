<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @vite(['resources/sass/app.scss','resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" >

    <title>NatOS</title>
</head>
    <body>
        <header style="background: linear-gradient(to right, #1a1a2e, #5861d3);">
            <div class="container">
                <div class="d-flex justify-content-center py-3">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="{{ route('user.index')}}" class="nav-link text-white">Dashboard</a></li>
                        <li class="nav-item"><a href="{{ route('user.index')}}" class="nav-link text-white">Usuários</a></li>
                        <li class="nav-item"><a href="{{ route('login.destroy')}}" class="nav-link text-white">Sair</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="container">
        @yield('content')
        </div>
    </body>
</html>

