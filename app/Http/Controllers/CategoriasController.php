<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index() {
      $listagem = Categorias::orderBy('id','desc')->get();
      return view('categorias',compact('listagem'));
    }

    public function store(Request $request) {
      if( Categorias::create( $request->all() ) ){
          $mensagem = "REGISTRO \"$request->nome\" CADASTRADO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO CADASTRAR O ITEM \"$request->nome\" ".$errors[0];
      }
      return redirect()->route('categorias')->with('mensagem',$mensagem);
    }

    public function update(Request $request) {
      if( Categorias::find( $request->id )->update( $request->all() ) ){
        $mensagem = "REGISTRO Nº $request->id ALTERADO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO TENTAR ALTERAR O REGISTRO Nº $request->id ".$errors[0];
      }
      return redirect()->route('categorias')->with('mensagem',$mensagem);
    }
    
    public function destroy(Request $request) {
      if( Categorias::find( $request->id )->delete() ) {
        $mensagem = "REGISTRO Nº $request->id EXCLUÍDO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO TENTAR EXLUIR O REGISTRO Nº $request->id";
      }

      return redirect()->route('categorias')->with('mensagem',$mensagem);
    }
}
