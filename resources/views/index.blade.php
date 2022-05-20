
@extends('layout.app', ["current" => "Pagina Inicial" ]) <!-- Ira herdar de layout.app -->

@section('title', 'Pagina Principal')



@section('content')

<div class="jumbotron bg-light border border-secondary">
    <div class="row">
        <div class="card-deck">
            <div class="card border border=primary">
                <div class="card-body">
                    <h5 class="card-title">Menu de Pessoas</h5>
                    <p class="card=text">
                    Aqui você irá poder cadastrar e exibir os seus produtos cadastrados
                    </p>
                    <div class="row">
                        <div class="col-6 col-sm-6">
                        <a href="{{ route('cadastro.pessoa') }}" class="btn btn-primary">Cadastro de Pessoas</a>
                    </div>
                    <div class="col-6 col-sm-6">
                        <a href="{{ route('visualiza.pessoa') }}" class="btn btn-primary">Visualizar Pessoas</a>
                    </div>
                </div>
                </div>

            </div>


 <div class="card border border=primary">

                <div class="card-body">

                    <h5 class="card-title">Menu de Categorias</h5>

                    <p class="card=text">
                        Aqui você irá poder cadastrar e exibir os seus produtos cadastrados
                    </p>

                    <a href="/categorias" class="btn btn-primary">Menu de Categorias </a>

                </div>
            </div>
        </div>
    </div>
</div>




@endsection   <!-- Fechamos a nossa seção -->