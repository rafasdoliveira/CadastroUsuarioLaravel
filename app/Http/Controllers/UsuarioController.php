<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller
{
    public function index() {      
        return view('welcome');
    }
    
    public function createUser() {
        return view('usuarios.create');
    }
    
    public function cadastrados(){
        $usuarios = Usuario::all();
        return view('usuarios.cadastrados', ['usuarios' => $usuarios]);
    }

    public function store(Request $request) {
        // Cria um novo usuário
        $usuario = new Usuario;
        $usuario -> primeiroNome = $request -> primeiroNome;
        $usuario -> ultimoNome = $request -> ultimoNome;
        $usuario -> email = $request -> email;
        $usuario -> senha = $request -> senha;
        $usuario -> save();

        // Recupera todos os usuários cadastrados
        $usuariosCadastrados = Usuario::all();

        // Formata os dados
        $dadosFormatados = $usuariosCadastrados-> map(function($usuario) {
            return "Primeiro Nome: {$usuario->primeiroNome}";
        });

        return redirect('usuarios/cadastrados')->with('dados formatados', $dadosFormatados->toArray());
    }

    public function login(){
        return view('usuarios.login');
    }
}
