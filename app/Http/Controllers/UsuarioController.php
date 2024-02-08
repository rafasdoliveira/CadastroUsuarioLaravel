<?php
namespace App\Http\Controllers;

use App\Http\Requests\UsuarioStoreRequest;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index() {
        try{
            return view('welcome');
        }
        catch(\Throwable $e) {
            return response() -> view('error', ['error_message' => $e -> getMessage(), 500 ]);
        }
    }

    public function createUser() {
        try{
            return view('usuarios.create');
        }
        catch(\Throwable $e) {
            return response() -> view('error', ['error_message' => $e -> getMessage(), 500 ]);
        }
    }


    public function cadastrados(){
        try {
            $usuarios = Usuario::all();
            return view('usuarios.cadastrados', ['usuarios' => $usuarios]);
        } catch (\Throwable $e) {
            return response() -> view('error', ['error_message' => $e -> getMessage(), 500 ]);
        }
    }

    public function store(UsuarioStoreRequest $request) {

        try {
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

            //Optar por usar a helper route nos redirecionamentos
            //return redirect('usuarios/cadastrados')->with('dados formatados', $dadosFormatados->toArray());
            return redirect()->route('usuario.cadastrados')->with('dados formatados', $dadosFormatados->toArray());
        } catch (\Throwable $e) {
            return response() -> view('error', ['error_message' => $e -> getMessage(), 500 ]);

        }

    }

    public function login(){ //Utilize Try/catch
        return view('usuarios.login');
    }
}

