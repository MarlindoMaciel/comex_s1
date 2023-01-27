<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
  public function index() {
    session()->put('PAGINA','produtos');
    $pagina = session('PAGINA');
    $classe = 'App\Models\\' . ucfirst($pagina);
    $legenda = "Lista de $pagina";

    $tabela = new $classe;
    $listagem = $tabela::orderBy('id','desc')->get();

    $categorias = Categorias::orderBy('id','desc')->get();

    return view($pagina,compact('listagem','legenda','pagina','categorias'));
  }

  public function store(Request $request) {
    $pagina = session('PAGINA');
    $classe = 'App\Models\\' . ucfirst($pagina);

    $nome = $request->input('nome');

    $tabela = new $classe;
    $tabela->nome = $nome;
    $tabela->fk_categoria = 1;

    if( $nome != '' && $tabela->save() ){
      $mensagem = "REGISTRO \"$tabela->nome\" CADASTRADO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO CADASTRAR O ITEM \"$nome\"";
    }
    return redirect()->route($pagina)->with('mensagem',$mensagem);
  }

  public function destroy(Request $request) {
    $pagina = session('PAGINA');
    $classe = 'App\Models\\' . ucfirst($pagina);

    $tabela = new $classe;
    $registro = $tabela::find($request->id);

    if( $registro && $registro->delete() ) {
      $mensagem = "REGISTRO Nº $request->id EXCLUÍDO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO TENTAR EXLUIR O REGISTRO Nº $request->id";
    }

    return redirect()->route($pagina)->with('mensagem',$mensagem);
  }

  public function update(Request $request) {
    $pagina = session('PAGINA');
    $classe = 'App\Models\\' . ucfirst($pagina);

    $tabela = new $classe;
    $registro = $tabela::find($request->id);
    
    $registro->nome = $request->input('nome');
    $registro->valor_unitario = $request->input('valor_unitario');
    $registro->quantidade_estoque = $request->input('quantidade_estoque');
    $registro->descricao = $request->input('descricao');
    $registro->fk_categoria = $request->input('fk_categoria');
    $registro->imagem = $request->input('imagem');
    $registro->miniatura = $request->input('miniatura');
    
//    if( $registro->save($request->all()) ){
    if( $registro->save() ){
        $mensagem = "REGISTRO Nº $request->id ALTERADO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO TENTAR ALTERAR O REGISTRO Nº $request->id";
    }
    return redirect()->route($pagina)->with('mensagem',$mensagem);
  }
}
