<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

define('PAGINA','produtos');
define('CLASSE','App\Models\Produtos');

class ProdutosController extends Controller
{
    public function index() {
      $classe = CLASSE;
      $pagina = PAGINA;
      $legenda = "Lista de $pagina";
      $modelo = new $classe;
      $listagem = $modelo::all();

      return view($pagina,compact('listagem','legenda','pagina'));
    }

    public function store(Request $request) {
      $classe = CLASSE;
      $pagina = PAGINA;
      $nome = $request->input('nome');
      $tabela = new $classe;
      $tabela->nome = $nome;
      if( $nome != '' && $tabela->save() ){
        $mensagem = "REGISTRO \"$tabela->nome\" CADASTRADO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO CADASTRAR O ITEM \"$nome\"";
      }
      return redirect()->route($pagina)->with('mensagem',$mensagem);
    }

    public function delete(Request $request) {
      $classe = CLASSE;
      $pagina = PAGINA;
      $id = $request->input('id');
      $modelo = new $classe;
      $tabela = $modelo::find($id);
      if( $tabela && $tabela->delete() ) {
        $mensagem = "REGISTRO Nº $id EXCLUÍDO COM SUCESSO";
      } else {
        $mensagem = "OCORREU UM ERRO AO TENTAR EXLUIR O REGISTRO Nº $id";
      }

      return redirect()->route($pagina)->with('mensagem',$mensagem);
    }

    public function update(Request $request) {
      $classe = CLASSE;
      $pagina = PAGINA;
      $id = $request->id;
      $nome = $request->input('nome');
      $modelo = new $classe;
      $tabela = $modelo::find($id);
      $tabela->nome = $nome;
      if( $tabela->nome != '' && $tabela->save() ){
        $mensagem = "REGISTRO Nº $id ALTERADO COM SUCESSO PARA \"$nome\"";
      } else {
        $mensagem = "OCORREU UM ERRO AO TENTAR ALTERAR O REGISTRO Nº $id";
      }
      return redirect()->route($pagina)->with('mensagem',$mensagem);
    }
}
