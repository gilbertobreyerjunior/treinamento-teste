@extends('layout.app')
@section('title', 'Lista de Pessoas')
@section('content')


<div class="card-border">
    <div class="card-body">

        <h5 class="card-title">Lista Pessoas</h5>

        <form method="GET" role="search">
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
          Deseja realmente excluir o registro?
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
