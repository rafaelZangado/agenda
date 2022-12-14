<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){

    }

    public function addUser(){

        return view ('layout/user/cadastrar');
    }

    public function salvar(Request $request){
      
        $input = $request->validate([
            'name' => 'string|required',
            'email' => 'string|required',
            'fone' => 'int|required',
            'avatar' => 'file',
        ]);
        $file = $input['avatar'];       
        $path = $file->store('avatar');
        
        $input['avatar'] = $path;

        
        Contatos::create($input);
        #Contatos::create($request->all());     
       
        return view ('layout/user/cadastrar')->with('sucesso', 'cadastrado com sucesso');
    
    }
    
    public function listarUser(){
        $userListar = Contatos::all();
        return view ('layout/user/listar',  compact('userListar'));
    }
    public function editarUser($id){
       
        #$editar = DB::table('contatos')->where('id', $id)->first();
        $editar = Contatos::where('id', $id)->first();
        return view ('layout/user/editar', compact('editar'));
    }
    public function pesquisar(Request $request){
        $busca = contatos::where('name', 'LIKE', "%{$request->busca}%")->get();
        return view ('layout/user/pesquisar', compact('busca'));
    }
   
    public function update(Request $request, Contatos $editar) {
        $input = $request->validate([
            'name' => 'string|required',
            'email' => 'string|required',
            'fone' => 'int|required',
            'avatar' => 'file',

        ]);
      
        $editar->fill($input);
        $editar->save();
        return Redirect::route('agenda.listar');
   
    }
   
    public function deletUser($id){
        if(!isset($id)) {
            return back()->with('EDITADO COM SUCESSO');
        }
        DB::table('contatos')->where('id', $id)->delete();
        return back()->with('delet','ITEM DELETADO');

    }

}
