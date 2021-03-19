<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
		return 'pagina produtos';
    }

    public function create()
    {
		return "Pagina de inserir produto";
    }

    public function show($nome, $valor=null)
    {
		if($valor){
			return "usuario e seu id é [$nome] e valor [$valor]";
		}else{
			return "usuario e seu id é [$nome]";
		}
    }
}
