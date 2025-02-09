@extends('layouts.admin')

@section('content')

    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header hstack gap-2">
            <span>Listar Usúarios</span>
            <span class="ms-auto">
                <a href="{{ route('user.create')}}" class="btn btn-success btn-sm">Cadastrar</a>
            </span>          
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Renato</td>
                <td>renato.pronasa@gmail.com</td>
                <td>
                <a href="{{ route('user.show',['user'=> 1])}}" class="btn btn-primary btn-sm">Visualizar</a>
                <a href="{{ route('user.edit',['user'=> 1])}}" class="btn btn-warning btn-sm">Editar</a>
                <form method="POST"action="#" class="d-inline">
                  @csrf
                  @method('delete'){{-- Alterar de get para delete --}}
                  <button type="submit"class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar ?')">
                    Apagar

                </form>

              </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Jacob@gmail.com</td>
                <td>
                <a href="{{ route('user.show',['user'=> 2])}}" class="btn btn-primary btn-sm">Visualizar</a>
                <a href="{{ route('user.edit',['user'=> 2])}}" class="btn btn-warning btn-sm">Editar</a>
                <form method="POST"action="#" class="d-inline">
                  @csrf
                  @method('delete'){{-- Alterar de get para delete --}}
                  <button type="submit"class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar ?')">
                    Apagar

                </form>
              </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>Larry@gmail.com</td>
                <td>
                <a href="{{ route('user.show',['user'=> 3])}}" class="btn btn-primary btn-sm">Visualizar</a>
                <a href="{{ route('user.edit',['user'=> 3])}}" class="btn btn-warning btn-sm">Editar</a>
                <form method="POST"action="#" class="d-inline">
                  @csrf
                  @method('delete'){{-- Alterar de get para delete --}}
                  <button type="submit"class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar ?')">
                    Apagar

                </form>
              </td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Carlos</td>
                <td>Carlos@gmail.com</td>
                <td>
                <a href="{{ route('user.show',['user'=> 4])}}" class="btn btn-primary btn-sm">Visualizar</a>
                <a href="{{ route('user.edit',['user'=> 4])}}" class="btn btn-warning btn-sm">Editar</a>
                <form method="POST"action="#" class="d-inline">
                  @csrf
                  @method('delete'){{-- Alterar de get para delete --}}
                  <button type="submit"class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar ?')">
                    Apagar

                </form>
              </td>
              </tr>
            </tbody>
          </table>

@endsection