<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>NatOS</title>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="card p-4 shadow" style="width: 24rem">
        <main class="form-signin text-center">

            <img class="mb-4" src="{{ asset('images/logo-define-100x100_v1.png') }}" alt="" width="72"
                height="72">
            <h1 class="h3 mb-3 fw-normal">Área Restrita</h1>

            <x-alert />

            <form action="{{ route('login.process') }}" method="POST">
                @csrf
                @method('POST')

                <div class="form-floating mb-3">
                    <div class="input-group">
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="E-mail" value="{{ old('email') }}">
                    
                    </div>
                </div>

                <div class="form-floating mb-3 ">
                    <div class="input-group">
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Senha" value="{{ old('password') }}">
                        
                        
                        <span class="input-group-text" role="button" onclick="togglePassword('password', this)"><i class="bi bi-eye"></i></span>
                    </div>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Acessar</button>

                <p class="mt-3 mb-3 text-body-secondary text-center">Esqueceu a Senha?</p>

                <p class="mt-3 mb-3 text-body-secondary text-center">Novo na NatOS? <a href="{{ route('login.create-user') }}"
                        class="text-decoration-none">Cadastre</a> para começar!</p>

            </form>
        </main>
    </div>

</body>

</html>
