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


                </div>

                <div class="form-group">

                    <label for="cpfPessoa">CPF</label>

                    <input type="text" class="form-control {{ $errors->has('cpfPessoa') ? 'is-invalid' :''  }} "
                        name="cpfPessoa" id="cpf" placeholder="Digite o CPF">



                    @if($errors->has('cpfPessoa'))


                    <div class="invalid-feedback">


                        {{ $errors ->first('cpfPessoa') }}

                    </div>
                    @endif



                </div>




            </div>
            {{--  fecha row  --}}
            <div class="form-group">


                <label for="telefonePessoa">Telefone</label>

                <div class="input-group">
                    <div class="input-group-prepend">

                        <input type="text"
                            class="form-control {{ $errors->has('telefonePessoa') ? 'is-invalid' :''  }} "
                            name="telefonePessoa" id="telefonePessoa" placeholder="Digite o Telefone">
                    </div>


                    @if($errors->has('telefonePessoa'))


                    <div class="invalid-feedback">


                        {{ $errors ->first('telefonePessoa') }}

                    </div>
                    @endif

                </div>



                <div class="form-group">

                    <label for="cepPessoa">CEP</label>

                    <input type="text" class="form-control {{ $errors->has('cepPessoa') ? 'is-invalid' :''  }} "
                        name="cepPessoa" id="cep" placeholder="Digite o CEP">


                    @if($errors->has('cepPessoa'))


                    <div class="invalid-feedback">


                        {{ $errors ->first('cepPessoa') }}

                    </div>
                    @endif


                </div>




                <div class="form-group">


                    <label for="uf">Estado</label>

                    <div class="input-group">
                        <div class="input-group-prepend">

                            <input type="text" class="form-control {{ $errors->has('uf') ? 'is-invalid' :''  }} "
                                name="uf" id="uf" placeholder="UF">
                        </div>


                        @if($errors->has('uf'))


                        <div class="invalid-feedback">


                            {{ $errors ->first('uf') }}

                        </div>
                        @endif

                    </div>

                    <div class="form-group">


                        <label for="cidade">Cidade</label>

                        <div class="input-group">
                            <div class="input-group-prepend">

                                <input type="text"
                                    class="form-control {{ $errors->has('cidade') ? 'is-invalid' :''  }} " name="cidade"
                                    id="cidade" placeholder="Cidade">
                            </div>


                            @if($errors->has('cidade'))


                            <div class="invalid-feedback">


                                {{ $errors ->first('cidade') }}

                            </div>
                            @endif

                        </div>

                        <div class="form-group">


                            <label for="bairro">Bairro</label>

                            <div class="input-group">
                                <div class="input-group-prepend">

                                    <input type="text"
                                        class="form-control {{ $errors->has('bairro') ? 'is-invalid' :''  }} "
                                        name="bairro" id="bairro" placeholder="Bairro">
                                </div>


                                @if($errors->has('bairro'))


                                <div class="invalid-feedback">


                                    {{ $errors ->first('bairro') }}

                                </div>
                                @endif

                            </div>



                            <div class="form-group">


                                <label for="logradouro">Logradouro</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">

                                        <input type="text"
                                            class="form-control {{ $errors->has('logradouro') ? 'is-invalid' :''  }} "
                                            name="logradouro" id="logradouro" placeholder="Logradouro">
                                    </div>


                                    @if($errors->has('logradouro'))


                                    <div class="invalid-feedback">


                                        {{ $errors ->first('logradouro') }}

                                    </div>
                                    @endif

                                </div>



                            </div>


                            <button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>

                            <button type="reset" class="btn btn-secondary btn-sm"> Limpar</button>

                            <a href="/" class="btn btn-sm btn-danger role=" button">Voltar</a>

                        </div>

                    </div>
                    <script src="/jquery.min.js"></script>
                    <script src="/js/viacep/viacep.js"></script>
                    <script src="/js/validacpf/validacpf.js"></script>
                    <script>





                    </script>



                    @endsection
                    <!-- Encerra a seção -->
