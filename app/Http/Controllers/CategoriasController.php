<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

define('PAGINA','categorias');
define('CLASSE','App\Models\Categorias');

class CategoriasController extends Controller
{
    public function index() {
      $legenda = "Lista de ".PAGINA;
      $classe = CLASSE;
      $modelo = new $classe;
      $listagem = $modelo::all();  

      return view(PAGINA,compact('listagem','legenda'));
    }

    public function store(Request $request) {
      $nome = $request->input('nome');

      $classe = CLASSE;
      $tabela = new $classe;
      
      $tabela->nome = $nome;
      if( $nome != '' && $tabela->save() ){
        $mensagem = "REGISTRO $tabela->nome CADASTRADO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO CADASTRAR O ITEM $nome";
      }
      return redirect()->route(PAGINA)->with('mensagem',$mensagem);
    }

    public function delete(Request $request) {
      $id = $request->input('id');
      $classe = CLASSE;
      $modelo = new $classe;
      $tabela = $modelo::find($id);
      if( $tabela && $tabela->delete() ) {
        $mensagem = "REGISTRO Nº $id EXCLUÍDO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO TENTAR EXLUIR O REGISTRO Nº $id";
      }

      return redirect()->route(PAGINA)->with('mensagem',$mensagem);
    }

    public function update(Request $request) {
      $id = $request->id;
      $nome = $request->input('nome');
      $classe = CLASSE;
      $modelo = new $classe;
      $tabela = $modelo::find($id);
      $tabela->nome = $nome;
      if( $tabela->nome != '' && $tabela->save() ){
        $mensagem = "REGISTRO Nº $id ALTERADO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO TENTAR ALTERAR O REGISTRO Nº $id";
      }
      return redirect()->route(PAGINA)->with('mensagem',$mensagem);
    }
}
