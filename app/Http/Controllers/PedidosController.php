<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {
      $pedidos = Pedidos::all();
      return view('Pedidos.index',compact('pedidos'));
    }

    public function create()
    {
      return view('Pedidos.create');
    }

    public function store(Request $request)
    {
        $pedido = new Pedidos();
        $pedido->nome = $request->input('nome');

        if( $pedido->save() ){
          $mensagem = 'REGISTRO CADASTRADO COM SUCESSO';
        } else {
          $mensagem = 'ERRO AO REALIZAR CADASTRAMENTO';
        }
        return redirect()->route('pedidos')->with('mensagem',$mensagem);
    }

    public function list()
    {
      $pedidos = Pedidos::all();
      return view('Pedidos.list',compact('pedidos'));
    }

    public function delete(Request $request)
    {
        $lista = $request->input('pedidos');
        if( isset( $lista ) ){
            foreach( $lista as $item ){
                $pedido = Pedidos::find($item);
                if( $pedido ) { 
                    if ($pedido->delete() ) {
                      $mensagem = 'REGISTRO EXCLUÍDO COM SUCESSO';
                    } else {
                      $mensagem = 'ERRO AO REALIZAR EXCLUSÃO';
                    }
                              } 
            }
        }

        return redirect()->route('pedidos')->with('mensagem',$mensagem);
    }

    public function show()
    {
      $pedidos = Pedidos::all();
      return view('Pedidos.show',compact('pedidos'));
    }

    public function edit(Request $request)
    {
      $pedido = Pedidos::find($request->id);
      return view('Pedidos.edit',compact('pedido'));
    }

    public function update(Request $request)
    {
      $pedido = Pedidos::find($request->id);
      $pedido->nome = $request->input('nome');
      if( $pedido->save() ){
        $mensagem = 'REGISTRO ALTERADO COM SUCESSO';
      } else {
        $mensagem = 'ERRO AO REALIZAR ALTERAÇÃO';
      }
      return redirect()->route('pedidos')->with('mensagem',$mensagem);

      //
    }
}
