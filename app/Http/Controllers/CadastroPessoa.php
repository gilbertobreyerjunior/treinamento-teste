<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class CadastroPessoa extends Controller
{


    public function index() {


            $pes = Pessoa::all();

        return view('lista-pessoas', compact('pes'));



       }


   public function create() {


    return view('cadastro-pessoa');



   }

   public function store(Request $request) {

        // $mensagens = [
        //     'required' => 'O campo :attribute não pode estar em branco',
        //     'nomeProduto.min' => 'O nome produto deve conter no mínimo tres caracteres',
        //     'precoProduto.min' => 'O valor do produto deve ter 4 numeros',
        //     'quantidadeEstoque' => 'O campo quantidade não deve ter no minimo 1 numero',
        //     'categoriaProduto' => 'E necessario informar uma categoria'
        // ];



        // $request->validate([
        //     'nomeProduto' => 'required |min:3|max:30',
        //     'precoProduto' => 'required |min:4',
        //     'quantidadeEstoque' => 'required |min:1',
        //     'categoriaProduto' => 'required |min:1'
        // ], $mensagens);

        $pe = new Pessoa();
        $pe->nome = $request->input('nomePessoa');
        $pe->cpf = $request->input('cpfPessoa');
        $pe->telefone = $request->input('telefonePessoa');
        $pe->cep = $request->input('cepPessoa');
        $pe->uf = $request->input('uf');
        $pe->cidade = $request->input('cidade');
        $pe->bairro = $request->input('bairro');
        $pe->logradouro = $request->input('logradouro');
        $pe->save();


        return redirect('/');

   }



}
