<?php

namespace App\Http\Controllers;

use App\Models\Contatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

    }

    public function addUser(){

        return view ('layout/user/cadastrar');
    }

    public function salvar(Request $request){
        #UserContatos::all(); 
        
        DB::table('contatos')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'fone'=>$request->fone
        ]);
       
       
        return view ('layout/user/cadastrar');
    
        #return ('layout/user/listar', $this->listar);
    }
    
    public function listarUser(){
        $userListar = Contatos::all();
        // dd($user); 
        // $listar = DB::table('contatos')->get();   
        return view ('layout/user/listar',  compact('userListar'));
    }
    public function editarUser($id){
        $editar = DB::table('contatos')->where('id', $id)->first();
        return view ('layout/user/editar', compact('editar'));
    }
    public function pesquisar(Request $request){
        $busca = contatos::where('name', 'LIKE', "%{$request->busca}%")->get();
        return view ('layout/user/pesquisar', compact('busca'));
    }
   
    public function atualizar(Request $request) {
        
        DB::table('contatos')->where('id', $request->id)->update([
            'name'=>$request->name,
            'fone'=>$request->fone,
            'email'=>$request->email,
        ]);
        return back()->with('EDITADO COM SUCESSO');
    }
   
    public function deletUser($id){
        if(!isset($id)) {
            return back()->with('EDITADO COM SUCESSO');

        }
        DB::table('contatos')->where('id', $id)->delete();
        return back()->with('ITEM DELETADO');

    }

}
