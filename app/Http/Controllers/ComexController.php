<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class ComexController extends Controller
{
    public function index()
    {
      session()->put('versao','v1.0');
      session()->put('titulo','COMEX'.session('versao'));
      $listagem = Categorias::all();
      return view('index',compact('listagem'));

    }

    public function show($id)
    {
        //
    }
}
