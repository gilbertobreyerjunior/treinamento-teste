@extends('layout.app')
@section('title', 'Lista de Pessoas')
@section('content')


<div class="card-border">
    <div class="card-body">

        <h5 class="card-title">Lista Pessoas</h5>

        <form action="" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="buscar" placeholder="Buscar pessoa" /> <span
                    class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-sm"> Buscar
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>

        @if(count($pes) > 0)


        <table class="table table-ordered table-hover">


            <thead>

                <tr>

                    <th>Código</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>CEP</th>
                    <th>Uf</th>
                    <th>Cidade</th>
                    <th>Bairro</th>
                    <th>Logradouro</th>

                </tr>

            </thead>

            <tbody>

                @foreach($pes as $pe)
                <tr>
                    <td>{{$pe->id}}</td>
                    <td>{{$pe->nome}}</td>
                    <td>{{$pe->cpf}}</td>
                    <td>{{$pe->cep}}</td>
                    <td>{{$pe->uf}}</td>
                    <td>{{$pe->cidade}}</td>
                    <td>{{$pe->bairro}}</td>
                    <td>{{$pe->logradouro}}</td>

                    <td>

                        <a href="/pessoa/editar/{{$pe->id}}" class="btn btn-sm btn-primary">Editar</a>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

    <div class="card-footer">

        <a href="/pessoa/cadastro" class="btn btn-sm btn-primary" role="button">Nova Pessoa</a>
        <a href="/" class="btn btn-sm btn-danger role=" button">Voltar</a>
    </div>

    @endsection
    <!-- Encerra a seção -->
