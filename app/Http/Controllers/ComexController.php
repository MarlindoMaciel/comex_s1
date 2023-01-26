<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ComexController extends Controller
{
    public function index() {
      session()->put('versao','v1.2');
      session()->put('titulo','COMEX'.session('versao'));
      $categorias = Categorias::all();
      $produtos = Produtos::join('imagens','produtos.id','=','imagens.fk_produto')->get();

      return view('index',compact('categorias','produtos'));
    }
}
