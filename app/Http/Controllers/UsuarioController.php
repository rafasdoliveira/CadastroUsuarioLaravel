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
            return response() -> view('error', ['message' => $e -> getMessage(), 500 ]);
        }
    }

    public function createUser() {
        try{
            return view('usuarios.create');
        }
        catch(\Throwable $e) {
            return response() -> view('error', ['message' => $e -> getMessage(), 500 ]);
        }
    }

    public function cadastrados(){
        try {
            $usuarios = Usuario::all();
            return view('usuarios.cadastrados', ['usuarios' => $usuarios]);
        } catch (\Throwable $e) {
            return response() -> view('error', ['message' => $e -> getMessage(), 500 ]);
        }
    }

    public function login(){
        try {
            return view('usuarios.login');
        } catch (\Throwable $e) {
            return response() -> view('error', ['message' => $e -> getMessage()],500);
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

            // Imagem

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $requestImage->move(public_path('images/usuariosPerfil'), $imageName);
                $usuario->image = $imageName;
            }
            $usuario -> save();
            //Optar por usar a helper route nos redirecionamentos
            //return redirect('usuarios/cadastrados')->with('dados formatados', $dadosFormatados->toArray());
            return redirect()->route('usuario.login')->with('msg','Usuário CADASTRADO com sucesso!');
        } catch (\Throwable $e) {
            return response()-> view('errors.500', ['message' => $e -> getMessage()],500);
        }
    }

    public function destroy($id) {

        Usuario::FindorFail($id)->delete();
        return redirect()->route('welcome')->with('msg','Usuário EXCLUÍDO com sucesso!');
    }

    public function edit($id) {

        $usuario = Usuario::FindorFail($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    public function update(UsuarioStoreRequest $request) {

        Usuario::FindorFail($request->id)->update($request->all());

        return redirect()->route('welcome')->with('msg','Usuário EDITADO com sucesso!');

    }
}

