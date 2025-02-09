<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Listar os usuários
    public function index()
    
    {
        //Carregar a view
        return view('users.index');
    }
    //Detalhes do usúario

    public function show()
    {   
        //Carregar formaulario cadastrar novo usuario
        return view('users.show');
    }

    public function create()
    {   
        //Criar a view
        return view('users.create');
    }

    public function edit()
    {   
        //Editar usuario
        return view('users.edit');
    }
}
