@extends('layouts.admin')

@section('content')

<div class="card mt-4 mb-4 border-light shadow">
    <div class="card-header hstack gap-2">
        <span class="fw-bold">Visualizar Usúarios</span>
        <span class="ms-auto">
            <a href="{{ route('user.index',['user'=> 1])}}" class="btn btn-success btn-sm">Listar</a>
        </span>   
    </div>    
</div>
<div class="card-body">
    <dl class="row">
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9">1</dd>

        <dt class="col-sm-3">Nome</dt>
        <dd class="col-sm-9">Renato</dd>

        <dt class="col-sm-3">E-mail</dt>
        <dd class="col-sm-9">renato.pronasa@gmail.com</dd>

        <dt class="col-sm-3">Cadastrado</dt>
        <dd class="col-sm-9">06/02/2025 20:05:02</dd>

        <dt class="col-sm-3">Editado</dt>
        <dd class="col-sm-9">06/02/2025 20:05:02</dd>
    </dl>
@endsection