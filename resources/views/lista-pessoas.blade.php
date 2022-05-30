@extends('layout.app')
@section('title', 'Lista de Pessoas')
@section('content')


<div class="card-border">
    <div class="card-body">

        <h5 class="card-title">Lista Pessoas</h5>

        <form class="navbar-form navbar-left" role="search" action="{!! url('pessoa/pesquisar') !!}" method="post" style="margin-left: 25%;margin-bottom: 3%;">

            <h4>Pesquisar</h4>
            <div class="row">
           <td>
              {!! csrf_field() !!}
              <input type="text" name="search" class="form-control" placeholder="Pesquisar" style="width: 200px;">


            <div class="col-md-4">
                <input type="date" name="data_inicio" class="form-control" placeholder="Data início">

            </div>

            <div class="col-md-4">

                <input type="date" name="data_fim" class="form-control" placeholder="Data fim">

            </div>

              <button class="btn btn-sm btn-primary">Filtrar</button>
            </td>
            </div>



        </div>
        </form>

         @if($pes->count() > 0)


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
                    <th>Cadastrado em: </th>
                    <th>Ações</th>

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
                    <td>{{ date( 'd/m/Y' , strtotime($pe->created_at))}}</td>

                    <td>

                        <a href="/pessoa/editar/{{$pe->id}}" class="btn btn-sm btn-primary">Editar</a>
                        <button class="btn-modal btn btn-sm btn-danger"  data-id="{{$pe->id}}">Excluir</button>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{--  <div class="justify-content-center align-items-center row">
        {{$pes->links()}}

    </div>  --}}
        @endif
    </div>

    <div class="card-footer">

        <a href="/pessoa/cadastro" class="btn btn-sm btn-primary" role="button">Nova Pessoa</a>
        <a href="/" class="btn btn-sm btn-danger role=" button">Voltar</a>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <!-- Modal Excluir -->
          <form id="deleteForm" method="POST"  action="">

            @csrf
            @method('DELETE')

            <input type="hidden" name="pessoa_id" id="pessoa_id" value"">

          <div class="modal-body">
          Deseja realmente excluir ?
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Deletar</button>
          </div>
        </form>

        </div>
      </div>
    </div>

    @endsection
    <!-- Encerra a seção -->


    @section('scripts')

    <script type="text/javascript">

        $(document).ready(function() {

            $(document).on('click', '.btn-modal', function(e) {
                $('#exampleModal').modal('show');

                var id = $(this).data('id');

                var url = '{{ url('/pessoa/excluir') }}/' + id;

                $('#deleteForm').attr('action', url);

                $('#pessoa_id').val(id);

            })
        });


    </script>

    @endsection
