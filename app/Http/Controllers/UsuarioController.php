<?php
namespace App\Http\Controllers;

use App\Http\Requests\UsuarioStoreRequest;
use App\Http\Requests\UsuarioUpdateRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function createUser() {
        return view('usuarios.create');
    }

    public function cadastrados(){
        return view('usuarios.cadastrados');
    }

    //Create
    public function store(UsuarioStoreRequest $request) {

             // Cria um novo usuário
            $usuario = new Usuario;
            $usuario -> primeiroNome = $request -> primeiroNome;
            $usuario -> ultimoNome = $request -> ultimoNome;
            $usuario -> email = $request -> email;
            $usuario -> senha = $request -> senha;
            $usuario -> usuario = $request -> usuario;

            // Recebe a Imagem de Perfil
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $requestImage->move(public_path('images/usuariosPerfil'), $imageName);
                $usuario->image = $imageName;
            }
            $usuario -> save();
            return redirect()->route('usuario.cadastrados')->with('msg','Usuário CADASTRADO com sucesso!');

    }
    //Resgatar dados Usuário
    public function buscarUsuario(Request $request) {
        $nomeUsuario = $request->input('nome_usuario');
        $usuario = Usuario::where('usuario', $nomeUsuario)->first();
        if ($usuario) {
            return view('usuarios.cadastrados', ['usuario' => $usuario]);
        } else {
            return redirect()->back()->with('error', 'Usuário não encontrado');
        }
    }


    //Delete
    public function destroy($id) {

        Usuario::FindorFail($id)->delete();
        return redirect()->route('usuario.cadastrados')->with('msg','Usuário EXCLUÍDO com sucesso!');
    }
    //Update
    public function edit($id) {

        $usuario = Usuario::FindorFail($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    public function update(UsuarioUpdateRequest $request) {

        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('images/usuariosPerfil'), $imageName);
            $data['image'] = $imageName;
        }

        Usuario::FindorFail($request->id)->update($data);

        return redirect()->route('usuario.cadastrados')->with('msg','Usuário EDITADO com sucesso!');
    }
}

