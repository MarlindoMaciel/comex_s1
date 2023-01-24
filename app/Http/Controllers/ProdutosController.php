<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
      $produtos = Produtos::all();
      return view('Produtos.index',compact('produtos'));
    }

    public function create()
    {
      return view('Produtos.create');
    }

    public function store(Request $request)
    {
        $produto = new Produtos();
        $produto->nome = $request->input('nome');

        if( $produto->save() ){
          $mensagem = 'REGISTRO CADASTRADO COM SUCESSO';
        } else {
          $mensagem = 'ERRO AO REALIZAR CADASTRAMENTO';
        }
        return redirect()->route('produtos')->with('mensagem',$mensagem);
    }

    public function list()
    {
      $produtos = Produtos::all();
      return view('Produtos.list',compact('produtos'));
    }

    public function delete(Request $request)
    {
        $lista = $request->input('produtos');
        if( isset( $lista ) ){
            foreach( $lista as $item ){
                $produto = Produtos::find($item);
                if( $produto ) { 
                    if ($produto->delete() ) {
                      $mensagem = 'REGISTRO EXCLUÍDO COM SUCESSO';
                    } else {
                      $mensagem = 'ERRO AO REALIZAR EXCLUSÃO';
                    }
                              } 
            }
        }

        return redirect()->route('produtos')->with('mensagem',$mensagem);
    }

    public function show()
    {
      $produtos = Produtos::all();
      return view('Produtos.show',compact('produtos'));
    }

    public function edit(Request $request)
    {
      $produto = Produtos::find($request->id);
      return view('Produtos.edit',compact('produto'));
    }

    public function update(Request $request)
    {
      $produto = Produtos::find($request->id);
      $produto->nome = $request->input('nome');
      if( $produto->save() ){
        $mensagem = 'REGISTRO ALTERADO COM SUCESSO';
      } else {
        $mensagem = 'ERRO AO REALIZAR ALTERAÇÃO';
      }
      return redirect()->route('produtos')->with('mensagem',$mensagem);

      //
    }
}
