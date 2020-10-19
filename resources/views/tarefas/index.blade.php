@extends('layouts.apps')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tarefas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tarefas.create') }}" title="Criar tarefa"> <i class="fas fa-plus-circle"></i>
                    </a>
                <a class="btn btn-success" href="./dashboard" title="Voltar"> <i class="fas fa-backward"></i>
                    </a>    
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Id Usuário</th>
            <th width="280px">Acões</th>
        </tr>
        @foreach ($tarefas as $tarefa)
            @if(Auth::id()==$tarefa->usuario_id)
            <tr>
                <td>{{ $tarefa->id }}</td>
                <td>{{ $tarefa->titulo }}</td>
                <td>{{ $tarefa->descricao }}</td>
                <td>{{ $tarefa->status }}</td>
                <td>{{ $tarefa->usuario_id }}</td> 
                
                <td>
                    <form action="{{ route('tarefas.destroy', $tarefa->id) }}" method="POST">

                        <a href="{{ route('tarefas.show', $tarefa->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                        <a href="{{ route('tarefas.edit', $tarefa->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>
                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endif    
        @endforeach
    </table>

    {!! $tarefas->links() !!}

@endsection
