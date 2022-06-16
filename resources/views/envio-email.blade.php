@extends('layout.app')

@section('title', 'Cadastro de Pessoas')

@section('content')

<div class="card border">

    <div class="card-body">

        <form action="{{ route('cadastrar.pessoa') }}" method="POST">

            @csrf
            <div class="row">

                <div class="col-12 col-sm-6">

                    <label for="emailPessoa">Email</label>

                    <input type="text" class="form-control {{ $errors->has('emailPessoa') ? 'is-invalid' :''  }} "
                        name="emailPessoa" id="emailPessoa" placeholder="Digite o Email">

                    @if($errors->has('emailPessoa'))

                    <div class="invalid-feedback">


                        {{ $errors ->first('emailPessoa') }}

                    </div>
                    @endif


                    <label for="textoPessoa">Texto</label>
                    <textarea class="form-control {{ $errors->has('textoPessoa') ? 'is-invalid' :''  }}" id="textoPessoa" rows="3"></textarea>

                        @if($errors->has('textoPessoa'))

                        <div class="invalid-feedback">

                            {{ $errors ->first('textoPessoa') }}

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
