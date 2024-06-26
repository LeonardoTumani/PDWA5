<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;

class CadastrarController extends Controller
{
    public function salvar (Request $request){

        $request->validate([
            "nome" => "required|string",
            "data_venda" => "required|date",
            "preco" => "required|decimal:2|min:0",
            "cor" => "required|string",
            "processador" => "required|string",
        ]
        ,[
            "nome.required" => "O campo 'Nome' deve ser preenchido",
            "nome.string" => "O campo 'Nome' deve conter letras",
            "data_venda.required" => "O campo 'Data_venda' deve ser preenchido",
            "data_venda.date" => "A data de data_venda deve ser válida",
            "preco.required" => "O campo 'Preço' deve ser preenchido",
            "preco.decimal" => "O campo 'Preço' deve ser válido",
            "preco.min" => "O preco deve ser positivo",
            "cor.required" => "O campo 'Cor' deve ser preenchido",
            "cor.string" => "O campo 'Cor' deve ser válido",
            "processador.required" => "O campo 'Processador' deve ser preenchido",
            "processador.string" => "O campo 'Processador' deve conter letras"
        ]    
    
        );

        $VideogameNovo = new Videogame();
        $VideogameNovo->fill($request->all());
        $VideogameNovo->save();
        
        // dd($request);

        return view('cadastroSalvo');

    }

}