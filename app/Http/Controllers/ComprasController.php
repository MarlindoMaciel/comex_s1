<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index()
    {
      $compras = Compras::all();
      return view('Compras.index',compact('compras'));
    }

    public function create()
    {
      return view('Compras.create');
    }

    public function store(Request $request)
    {
        $compra = new Compras();
        $compra->nome = $request->input('nome');

        if( $compra->save() ){
          $mensagem = 'REGISTRO CADASTRADO COM SUCESSO';
        } else {
          $mensagem = 'ERRO AO REALIZAR CADASTRAMENTO';
        }
        return redirect()->route('compras')->with('mensagem',$mensagem);
    }

    public function list()
    {
      $compras = Compras::all();
      return view('Compras.list',compact('compras'));
    }

    public function delete(Request $request)
    {
        $lista = $request->input('compras');
        if( isset( $lista ) ){
            foreach( $lista as $item ){
                $compra = Compras::find($item);
                if( $compra ) { 
                    if ($compra->delete() ) {
                      $mensagem = 'REGISTRO EXCLUÍDO COM SUCESSO';
                    } else {
                      $mensagem = 'ERRO AO REALIZAR EXCLUSÃO';
                    }
                              } 
            }
        }

        return redirect()->route('compras')->with('mensagem',$mensagem);
    }

    public function show()
    {
      $compras = Compras::all();
      return view('Compras.show',compact('compras'));
    }

    public function edit(Request $request)
    {
      $compra = Compras::find($request->id);
      return view('Compras.edit',compact('compra'));
    }

    public function update(Request $request)
    {
      $compra = Compras::find($request->id);
      $compra->nome = $request->input('nome');
      if( $compra->save() ){
        $mensagem = 'REGISTRO ALTERADO COM SUCESSO';
      } else {
        $mensagem = 'ERRO AO REALIZAR ALTERAÇÃO';
      }
      return redirect()->route('compras')->with('mensagem',$mensagem);

      //
    }
}
