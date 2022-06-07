<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use Carbon\Carbon;

class CadastroPessoa extends Controller
{


    public function index() {


           $pes = Pessoa::paginate(2);
        // $pes = Pessoa::all();

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
        $pe->cpf = preg_replace('/[^0-9]/', '', $request->input('cpfPessoa'));
        $pe->telefone = $request->input('telefonePessoa');
        $pe->cep = $request->input('cepPessoa');
        $pe->uf = $request->input('uf');
        $pe->cidade = $request->input('cidade');
        $pe->bairro = $request->input('bairro');
        $pe->logradouro = $request->input('logradouro');
        $pe->save();


        return redirect('/');

   }


public function edit($id)
{

    $pe = Pessoa::find($id);

    if (isset($pe)) {
    return view('editar-pessoa', compact('pe'));


    }
    return redirect('/');

        }




   public function update(Request $request, $id)
   {
    // $mensagens = [
    //     'required' => 'O campo :attribute não pode estar em branco',


    //     'nomeProduto.min' => 'O nome produto deve conter no mínimo tres caracteres',

    //     'quantidadeProduto.min' => 'O campo quatidade produto deve ter 1 numeros',

    //     'patrimonioProduto.min' => 'O campo patrimônio não pode ficar em branco'
    // ];



    // $request->validate([


    //     'nomeProduto' => 'required |min:3|max:30',
    //     'quantidadeProduto' => 'required |min:1',
    //     'patrimonioProduto' => 'required |min:1'



    // ], $mensagens);


   $pe = Pessoa::find($id);

   if (isset($pe)) {

        $pe->nome = $request->input('nomePessoa');
        $pe->cpf = preg_replace('/[^0-9]/', '', $request->input('cpfPessoa'));
        $pe->telefone = $request->input('telefonePessoa');
        $pe->cep = $request->input('cepPessoa');
        $pe->uf = $request->input('uf');
        $pe->cidade = $request->input('cidade');
        $pe->bairro = $request->input('bairro');
        $pe->logradouro = $request->input('logradouro');
       $pe->save();
   }
   return redirect('/pessoa/visualiza');

   }


   public function destroy($id)
   {

        $pe = Pessoa::find($id);
        $pe->delete();
        return redirect('/pessoa/visualiza');

   }



   public function Pesquisar(Request $request)
   {
    $search = $request->input('search');


    // $data_hoje = Carbon::parse('today')->format('Y-m-d 00.00:00');
    // $fim_hoje = Carbon::parse('today')->format('Y-m-d 23.59:59');



    $inicio = Carbon::parse($request->data_inicio);
    $fim= Carbon::parse($request->data_fim);

    $pes = Pessoa::whereDate('created_at','<=',$fim)
    ->whereDate('created_at','>=',$inicio)
    ->get();


    if ($search != '') {
        $pes = Pessoa::orWhere('nome','like',"%$search%")
                        ->orWhere('cpf','like',"%$search%")
                        ->orWhere('cep','like',"%$search%")
                        ->orWhere('uf','like',"%$search%")
                        ->get();
        }


        return view('lista-pessoas', compact('pes'));
    }


    }











        // $data_inicio = \DateTime::createFromFormat('d/m/Y', $request->get('data_inicio'))->format('Y-m-d');
    // $data_fim    = \DateTime::createFromFormat('d/m/Y', $request->get('data_fim'))->format('Y-m-d');


    // if ($data_inicio != '' && $data_fim !='' && $search != '' ) {

    //     // $pes = Pessoa::whereDate('created_at', '>=', $data_inicio);

    //     // $pes->whereDate('created_at', '<=', $data_fim);

        // $pes = Pessoa::where("(created_at => ? AND created_at <= ?)",[$data_inicio." 00:00:00", $data_fim." 23:59:59"]);



     // if ($search != '') {

        // $pes ->where(function ($query) use($search) {


        //     $query->where('nome','like',"%$search%")->orWhere('cpf','like',"%$search%")
        //                                             ->orWhere('cep','like',"%$search%")
        //                                             ->orWhere('uf','like',"%$search%");

        // });


        // } else

            // if ($search != '') {
            //     $pes = Pessoa::Where('nome','like',"%$search%")
            //                     ->orWhere('cpf','like',"%$search%")
            //                     ->orWhere('cep','like',"%$search%")
            //                     ->orWhere('uf','like',"%$search%")
            //                     ->paginate(2);
            //     }



        // $pes = Pessoa::whereBetween("created_at", [$data_inicio, $data_fim]);
