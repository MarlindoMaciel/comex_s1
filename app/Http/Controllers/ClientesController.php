<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
      $clientes = Clientes::all();
      return view('Clientes.index',compact('clientes'));
    }

    public function create()
    {
      return view('Clientes.create');
    }

    public function store(Request $request)
    {
        $cliente = new Clientes();
        $cliente->cliente = $request->input('cliente');

        if( $cliente->save() ){
          $mensagem = 'REGISTRO CADASTRADO COM SUCESSO';
        } else {
          $mensagem = 'ERRO AO REALIZAR CADASTRAMENTO';
        }
        return redirect()->route('clientes')->with('mensagem',$mensagem);
    }

    public function list()
    {
      $clientes = Clientes::all();
      return view('Clientes.list',compact('clientes'));
    }

    public function delete(Request $request)
    {
        $lista = $request->input('clientes');
        if( isset( $lista ) ){
            foreach( $lista as $item ){
                $cliente = Clientes::find($item);
                if( $cliente ) { 
                    if ($cliente->delete() ) {
                      $mensagem = 'REGISTRO EXCLUÍDO COM SUCESSO';
                    } else {
                      $mensagem = 'ERRO AO REALIZAR EXCLUSÃO';
                    }
                              } 
            }
        }

        return redirect()->route('clientes')->with('mensagem',$mensagem);
    }

    public function show()
    {
      $clientes = Clientes::all();
      return view('Clientes.show',compact('clientes'));
    }

    public function edit(Request $request)
    {
      $cliente = Clientes::find($request->id);
      return view('Clientes.edit',compact('cliente'));
    }

    public function update(Request $request)
    {
      $cliente = Clientes::find($request->id);
      $cliente->cliente = $request->input('cliente');
      if( $cliente->save() ){
        $mensagem = 'REGISTRO ALTERADO COM SUCESSO';
      } else {
        $mensagem = 'ERRO AO REALIZAR ALTERAÇÃO';
      }
      return redirect()->route('clientes')->with('mensagem',$mensagem);
    }
}
