@extends('layouts.apps')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>  {{ $tarefa->descricao }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tarefas.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $tarefa->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                {{ $tarefa->descricao }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $tarefa->status }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Usuario:</strong>
                {{ $tarefa->usuario_id }}
            </div>
        </div>
        @if(isset($tarefa->datetime_inicio))
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data e Hora de Inicio:</strong>
                {{ date_format($tarefa->datetime_inicio, 'jS M Y') }}
            </div>
        </div>
        @endif
        @if(isset($tarefa->datetime_fim))
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Data e Hora de Fim:</strong>
                {{ date_format($tarefa->datetime_fim, 'jS M Y') }}
            </div>
        </div>
        @endif
    </div>
@endsection