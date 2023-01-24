<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
      $categorias = Categorias::all();
      return view('Categorias.index',compact('categorias'));
    }

    public function create()
    {
      return view('Categorias.create');
    }

    public function store(Request $request)
    {
        $categoria = new Categorias();
        $categoria->nome = $request->input('nome');

        if( $categoria->save() ){
          $mensagem = 'REGISTRO CADASTRADO COM SUCESSO';
        } else {
          $mensagem = 'ERRO AO REALIZAR CADASTRAMENTO';
        }
        return redirect()->route('categorias')->with('mensagem',$mensagem);
    }

    public function list()
    {
      $categorias = Categorias::all();
      return view('Categorias.list',compact('categorias'));
    }

    public function delete(Request $request)
    {
        $lista = $request->input('categorias');
        if( isset( $lista ) ){
            foreach( $lista as $item ){
                $categoria = Categorias::find($item);
                if( $categoria ) { 
                    if ($categoria->delete() ) {
                      $mensagem = 'REGISTRO EXCLUÍDO COM SUCESSO';
                    } else {
                      $mensagem = 'ERRO AO REALIZAR EXCLUSÃO';
                    }
                              } 
            }
        }

        return redirect()->route('categorias')->with('mensagem',$mensagem);
    }

    public function show()
    {
      $categorias = Categorias::all();
      return view('Categorias.show',compact('categorias'));
    }

    public function edit(Request $request)
    {
      $categoria = Categorias::find($request->id);
      return view('Categorias.edit',compact('categoria'));
    }

    public function update(Request $request)
    {
      $categoria = Categorias::find($request->id);
      $categoria->nome = $request->input('nome');
      if( $categoria->save() ){
        $mensagem = 'REGISTRO ALTERADO COM SUCESSO';
      } else {
        $mensagem = 'ERRO AO REALIZAR ALTERAÇÃO';
      }
      return redirect()->route('categorias')->with('mensagem',$mensagem);

      //
    }
}
