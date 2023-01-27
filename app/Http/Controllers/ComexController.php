<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ComexController extends Controller
{
    public function index(Request $request) {
      $categorias = Categorias::all();

      if( $request->id > 0 )
         $produtos = Produtos::where('fk_categoria','=',$request->id)->get();
      else
         $produtos = Produtos::all();

      return view('index',compact('categorias','produtos'));
    }
}
