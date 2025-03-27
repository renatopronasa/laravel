<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Login
    public function index()
    {
        // Carregar view
        return view('login.index');
    }
    // Validar o usuário a senha do login
    public function loginProcess(LoginRequest $request)
    {
        // Validar o formulário
        $request->validated();

        // Validar o usuário e a senha com as informações no banco de dados
        $authenticated = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        // Verificar se o usuário foi autenticado
        if(!$authenticated){
            // Redirecionar o usuário para a página anterior "login", enviar a mensagem de erro
            return back()->withInput()->with('error', 'E-mail ou senha inválido');
        }
        // Recuperar o usuário autenticado
        $user = Auth::user();
        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('user.index')->with('success', 'Logado com sucesso!');
        // Redirecionar o usuário
        return redirect()->route('user.index');

    }
    public function create()
    {
        // Carregar view
        return view('login.create');
    }

    public function store(Request $request)
    {
        $request->validate();

        // Iniciar a transação
        DB::beginTransaction();

        try {
            // Cadastrar o usuário no BD
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            // Redirecionar o usuário, enviar a mensagem de sucesso
            DB::commit();
            return redirect()->route('login')->with('success', 'Usuário cadastrado com sucesso!');
        } catch (\Exception $e) {
            // Desfazer a transação
            DB::rollBack();
            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('login')->with('error', 'Erro ao cadastrar usuário!');
        }
    }
    // Deslogar o usuário
    public function destroy()
    {
        // Deslogar o usuário
        Auth::logout();

        // Redirecionar o usuário, enviar a mensagem de sucesso
        return redirect()->route('login')->with('success', 'Deslogado com sucesso!');
    }
}
