@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">

        <div class="card-header hstack gap-2">
            <span>Editar Usuário</span>
            <span class="ms-auto">
                <a href="{{ route('user.index') }}" class="btn btn-info btn-sm">Listar</a>
                <a href="{{ route('user.show', ['user' => $user->id])}}" class="btn btn-primary btn-sm">Visualizar</a>
            </span>
        </div>

        <x-alert />

        <div class="card-body">

            <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-md-12">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome completo" value="{{ old('name', $user->name) }}">
                </div>

                <div class="col-md-12">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Melhor e-mail do usuário" value="{{ old('email', $user->email) }}">
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label">Senha</label>
             
                <div class="input-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Mínimo 6 caracteres" value="{{ old('password') }}">
                <span class="input-group-text" role="button" onclick="togglePassword('password', this)"><i class="bi bi-eye"></i></span>
                </div>
            </div>
            <div class="col-md-6">
                <label for="password_confirmation" class="form-label">Confirma Senha</label>
                <div class="input-group">        
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Mínimo 6 caracteres" value="{{ old('password_confirmation') }}">
                    <span class="input-group-text" role="button" onclick="togglePassword('password_confirmation', this)"> <i class="bi bi-eye"></i></span>
                </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                </div>

            </form>

        </div>

    </div>
@endsection
