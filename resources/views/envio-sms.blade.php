@extends('layout.app')

@section('title', 'Cadastro de Pessoas')

@section('content')

<div class="card border">

    <div class="card-body">

        <form action="{{ route('cadastrar.pessoa') }}" method="POST">

            @csrf
            <div class="row">

                <div class="col-12 col-sm-6">

                    <label for="nomePessoa">Nome</label>

                    <input type="text" class="form-control {{ $errors->has('nomePessoa') ? 'is-invalid' :''  }} "
                        name="nomePessoa" id="nomePessoa" placeholder="Digite o Nome">

                    @if($errors->has('nomePessoa'))

                    <div class="invalid-feedback">


                        {{ $errors ->first('nomePessoa') }}

                    </div>
                    @endif

                    <label for="smsPessoa">Texto</label>
                    <textarea class="form-control {{ $errors->has('smsPessoa') ? 'is-invalid' :''  }}" id="smsPessoa" rows="3"></textarea>

                        @if($errors->has('smsPessoa'))

                        <div class="invalid-feedback">

                            {{ $errors ->first('smsPessoa') }}

                        </div>
                        @endif

                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Enviar</button>

                            <button type="reset" class="btn btn-secondary btn-sm"> Limpar</button>

                            <a href="/" class="btn btn-sm btn-danger role=" button>Voltar</a>

                        </div>

                    </div>
                    <script src="/jquery.min.js"></script>


                    @endsection
                    <!-- Encerra a seção -->
