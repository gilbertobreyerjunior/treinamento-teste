<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pessoa;
use Carbon\Carbon;
use App\Mail\PessoasMailable;
use Illuminate\Support\Facades\Mail;

class CadastroPessoa extends Controller
{

    public function index() {

           $pes = Pessoa::paginate(2);

        return view('lista-pessoas', compact('pes'));

       }

   public function create() {

    return view('cadastro-pessoa');

   }

   public function store(Request $request) {

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

        Mail::to('developertestes500@gmail.com')->send(new PessoasMailable());

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
