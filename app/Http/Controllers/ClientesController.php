<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
  public function index() {
    session()->put('PAGINA','clientes');
    $pagina = session('PAGINA');
    $classe = 'App\Models\\' . ucfirst($pagina);
    $legenda = "Lista de $pagina";

    $tabela = new $classe;
    $listagem = $tabela::orderBy('id','desc')->get();

    return view($pagina,compact('listagem','legenda','pagina'));
  }

  public function store(Request $request) {
    $pagina = session('PAGINA');
    $classe = 'App\Models\\' . ucfirst($pagina);

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
    $registro->cpf = $request->input('cpf');
    $registro->telefone = $request->input('telefone');
    $registro->rua = $request->input('rua');
    $registro->numero = $request->input('numero');
    $registro->complemento = $request->input('complemento');
    $registro->bairro = $request->input('bairro');
    $registro->cidade = $request->input('cidade');
    $registro->estado = $request->input('estado');

    if( $registro->save() ){
      $mensagem = "REGISTRO Nº $request->id ALTERADO COM SUCESSO";
    } else {
      $mensagem = "OCORREU UM ERRO AO TENTAR ALTERAR O REGISTRO Nº $request->id";
    }
    return redirect()->route($pagina)->with('mensagem',$mensagem);
  }
}
