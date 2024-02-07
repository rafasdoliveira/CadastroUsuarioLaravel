<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        //Validação
        $regras = [
            'primeiroNome' => 'required|string|max:255',
            'ultimoNome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuario,email',
            'senha' => 'required|string|min:6'
        ];
        // Mensagens de erro
        $mensagens = [
            'required' => 'O campo :attribute é obrigatório.',
            'string' => 'O campo :attribute deve ser uma string.',
            'max' => 'O campo :attribute não pode exceder :max caracteres.',
            'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
            'unique' => 'O :attribute já está sendo usado.',
            'min' => 'O campo :attribute deve ter no mínimo :min caracteres.'
        ];

        // Validação
        $validator = Validator::make($request->all(), $regras, $mensagens);

        // if ($validator -> fails()) {
        //     return redirect()->back()
        //     ->withErrors($validator)
        //     ->withInput();
        // }

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
