<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(string $nome, int $categoria_id, string $mensagem = 'email não informado')
    {
        return view('site.teste', compact('nome', 'categoria_id', 'mensagem'));
    }
}