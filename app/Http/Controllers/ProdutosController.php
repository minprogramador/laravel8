<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;

class ProdutosController extends Controller
{
    public function index()
    {
    	$produtos = produto::paginate();
    	return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create()
    {
    	return view('produtos.create');
    }

    public function show($nome, $valor=null)
    {
    	return view('produtos.show', ['nome'=>$nome, 'valor'=>$valor]);
		// if($valor){
		// 	return "usuario e seu id é [$nome] e valor [$valor]";
		// }else{
		// 	return "usuario e seu id é [$nome]";
		// }
    }
}
