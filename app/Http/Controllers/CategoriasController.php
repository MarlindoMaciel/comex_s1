<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use DB;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categorias = Categorias::all();

      return view('Categorias.index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categorias();
        $categoria->categoria = $request->input('categoria');

        if( $categoria->save() ){
          $mensagem = 'REGISTRO CADASTRADO COM SUCESSO';
        } else {
          $mensagem = 'ERRO AO REALIZAR CADASTRAMENTO';
        }
        return redirect()->route('index')->with('mensagem',$mensagem);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
      $categorias = Categorias::all();
      return view('Categorias.list',compact('categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $lista = $request->input('categorias');
        if( isset( $lista ) ){
            foreach( $lista as $item ){
                $categoria = Categorias::find($item);
                $categoria->delete();
            }
        }
        $categorias = Categorias::all();
        return view('Categorias.list',compact('categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
