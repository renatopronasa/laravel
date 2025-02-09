@extends('layouts.admin')

@section('content')

<div class="card mt-4 mb-4 border-light shadow">
    <div class="card-header hstack gap-2">
        <span>Editar Usúarios</span>
        <span class="ms-auto">
            <a href="{{ route('user.index')}}" class="btn btn-info btn-sm">Listar</a>
        </span>   
    </div>    
</div>
<div class="card-body">
    
    <form class="row g-3">
        @csrf
        <div class="col-md-12">
          <label for="name" class="form-label">Nome</label>
          <input type="text" name="name" class="form-control" id="name">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="name" class="form-control" id="email">
        </div>

        <div class="col-md-6">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="name" class="form-control" id="name">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
        </div>
    </form>
@endsection