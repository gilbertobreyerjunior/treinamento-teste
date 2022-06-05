<?php

use Illuminate\Database\Seeder;
use App\Pessoa;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Str;


class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pessoas')->insert([

            'nome' => 'Luisa Gonçalves',
            'cpf' => '184441007063',
            'telefone' => '5599090432',
            'cep' => '22060970',
            'uf' => 'RJ',
            'cidade' => 'Rio de Janeiro',
            'bairro' => 'CopaCabana',
            'logradouro' => 'Avenida Atlantica',


         ]);

         DB::table('pessoas')->insert([

            'nome' => 'Luis Henrique',
            'cpf' => '18444107063',
            'telefone' => '5599090432',
            'cep' => '22060970',
            'uf' => 'RJ',
            'cidade' => 'Rio de Janeiro',
            'bairro' => 'Botafogo',
            'logradouro' => 'Avenida',


         ]);

         DB::table('pessoas')->insert([

            'nome' => 'Omario Silva',
            'cpf' => '183214107063',
            'telefone' => '5599090432',
            'cep' => '22060970',
            'uf' => 'RJ',
            'cidade' => 'Rio de Janeiro',
            'bairro' => 'CopaCabana',
            'logradouro' => 'Avenida Atlantica',


         ]);



    }
}
