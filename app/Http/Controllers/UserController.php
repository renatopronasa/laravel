<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    // Listar os usuários
    public function index()
    {
        // Recuperar os registros do banco de dados
        $users = User::orderByDesc('id')->paginate(2);

        // Carregar a view
        return view('users.index',['users' => $users]);
    }

    // Detalhes do usuário
    public function show(User $user)
    {        
        // Carregar a view
        return view('users.show', ['user' => $user]);
    }

    // Carregar o formulário cadastrar novo usuário
    public function create()
    {
        // Carregar a view
        return view('users.create');
    }

    // Cadastrar novo registro no banco de dados
    public function store(UserRequest $request)
    {
        // Validar o formulário
        $request->validated();

        // Cadastrar o usuário no BD
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('user.show', ['user' => $user->id])->with('success', 'Usuário cadastrado com sucesso!');
    }

    // Carregar o formulário editar usuário
    public function edit(User $user)
    {
        // Carregar a view
        return view('users.edit', ['user' => $user]);
    }

    // Editar o registro no banco de dados
    public function update(UserRequest $request, User $user)
    {
        // Validar o formulário
        $request->validated();
        
        // Editar as informações do registro no banco de dados
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('user.show', ['user' => $user->id])->with('success', 'Usuário editado com sucesso!');
    }

    // Apagar o registro no banco de dados
    public function destroy(User $user)
    {
        // Apagar o registro BD
        $user->delete();

        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('user.index')->with('success', 'Usuário apagado com sucesso!'); 
    }
}
