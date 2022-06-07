@extends('layout.app')

@section('title', ' Editar Pessoa')

@section('content')

<div class="card border">
    <div class="card-body">
        <form action="/pessoa/editado/{{$pe->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomePessoa">Nome</label>
                <input type="text" class="form-control {{ $errors->has('nomePessoa') ? 'is-invalid' :''  }} "
                    name="nomePessoa" value="{{$pe->nome}}" id="nomePessoa">

                @if($errors->has('nomePessoa'))

                <div class="invalid-feedback">

                    {{ $errors ->first('nomePessoa') }}

                </div>
                @endif

            </div>

            <div class="form-group">
                <label for="cpfPessoa">CPF</label>
                <input type="text" class="form-control {{ $errors->has('cpfPessoa') ? 'is-invalid' :''  }}" name="cpfPessoa" value="{{$pe->cpf}}" id="cpf" onkeyup="cpfCheck(this)" onkeydown="javascript: fMasc( this, mCPF );" placeholder="Digite o CPF"> <span id="cpfResponse"></span>

                @if($errors->has('cpfPessoa'))

                <div class="invalid-feedback">

                    {{ $errors ->first('cpfPessoa') }}

                </div>
                @endif

            </div>

            <div class="form-group">
                <label for="telefonePessoa">Telefone</label>
                <input type="text" class="form-control {{ $errors->has('telefonePessoa') ? 'is-invalid' :''  }} "
                    name="telefonePessoa" value="{{$pe->telefone}}" id="telefonePessoa">

                @if($errors->has('telefonePessoa'))

                <div class="invalid-feedback">

                    {{ $errors ->first('telefonePessoa') }}

                </div>
                @endif

            </div>

            <div class="form-group">
                <label for="cepPessoa">CEP</label>
                <input type="text" class="form-control {{ $errors->has('cepPessoa') ? 'is-invalid' :''  }} "
                    name="cepPessoa" value="{{$pe->cep}}" id="cep">

                @if($errors->has('cepPessoa'))

                <div class="invalid-feedback">

                    {{ $errors ->first('cepPessoa') }}

                </div>
                @endif

            </div>

            <div class="form-group">
                <label for="uf">Estado</label>
                <input type="text" class="form-control {{ $errors->has('uf') ? 'is-invalid' :''  }} " name="uf"
                    value="{{$pe->uf}}" id="uf">

                @if($errors->has('uf'))

                <div class="invalid-feedback">

                    {{ $errors ->first('uf') }}

                </div>
                @endif

            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control {{ $errors->has('cidade') ? 'is-invalid' :''  }} " name="cidade"
                    value="{{$pe->cidade}}" id="cidade">

                @if($errors->has('cidade'))

                <div class="invalid-feedback">

                    {{ $errors ->first('cidade') }}

                </div>
                @endif

            </div>

            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control {{ $errors->has('bairro') ? 'is-invalid' :''  }} " name="bairro"
                    value="{{$pe->bairro}}" id="bairro">

                @if($errors->has('bairro'))

                <div class="invalid-feedback">

                    {{ $errors ->first('bairro') }}

                </div>
                @endif

            </div>

            <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control {{ $errors->has('logradouro') ? 'is-invalid' :''  }} "
                    name="logradouro" value="{{$pe->logradouro}}" id="logradouro">

                @if($errors->has('logradouro'))

                <div class="invalid-feedback">

                    {{ $errors ->first('logradouro') }}

                </div>
                @endif

            </div>

            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>

            <button type="reset" class="btn btn-danger btn-sm"> Limpar</button>
    </div>
    <div class="form-group">
        {{--  <a href="" class="btn btn-default">Voltar</a>  --}}
    </div>

    <script src="/jquery.min.js"></script>
    <script src="/js/viacep/viacep.js"></script>
    <script src="/js/validacpf/validacpf.js"></script>

    @endsection
    <!-- Encerra a seção -->
