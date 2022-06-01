<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Pessoa;

class PessoaTestunit extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    public function check_if_pessoa_columns_is_correct()
    {
        $pe= new Pessoa;


        $expected = [

            'nome',
            'cpf',
            'telefone',
            'cep',
            'uf',
            'cidade',
            'bairro',
            'logradouro',
            'created_at'
        ];


        $arrayCompare = array_diff($expected, $pe->getFillable());

        $this->assertEquals(0, count($arrayCompare));
    }

}
