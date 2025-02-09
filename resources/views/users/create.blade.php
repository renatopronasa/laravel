@extends('layouts.admin')

@section('content')

<div class="card mt-4 mb-4 border-light shadow">
    <div class="card-header hstack gap-2">
        <span class="fw-bold">Cadastrar Usúarios</span>
        <span class="ms-auto">
            <a href="{{ route('user.index')}}" class="btn btn-info btn-sm">Listar</a>
        </span>   
    </div>    
</div>
<div class="card-body">
    
    <form class="row g-3">
        <div class="col-md-12">
            <label for="name" class="form-label">Nome Completo</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="name" class="form-control" id="email"placeholder="digite seu E-mail">
        </div>

        <div class="col-md-6">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="name" class="form-control" id="name"placeholder="senha minimo 6 caracteres">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
        </div>
    </form>
@endsection