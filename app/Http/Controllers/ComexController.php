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
      elseif( $request->id == -1 ) //os mais vendidos
         $produtos = Produtos::take(5)->orderBy('vendidos','desc')->get();
      elseif( $request->id == -2 ) //os mais recentes
         $produtos = Produtos::orderBy('created_at','desc')->take(5)->get();
      else
         $produtos = Produtos::orderBy('created_at','desc')->get();

      return view('index',compact('categorias','produtos'));
    }
}
