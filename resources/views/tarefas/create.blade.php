@extends('layouts.apps')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adicionar nova tarefa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tarefas.index') }}" title="Voltar"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Existem problemas com seus dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('tarefas.store') }}" method="POST" >
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Título:</strong>
                    <input type="text" name="titulo" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descricao:</strong>
                    <input type="text" name="descricao" class="form-control" 
                        placeholder="Descricao"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Usuário:</strong>
                    <select name="usuario_id" class="form-control" 
                        placeholder="Escolha um id de usuário">
                        @foreach($users as $u)
                            @if($u==Auth::id())
                            <option value="{{$u}}">{{$u}}</option>
                            @endif    
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <select name="status" class="form-control" 
                        placeholder="Escolha um status">
                        <option value="a fazer">A Fazer</option>
                        <option value="fazendo">Fazendo</option>
                        <option value="feita">Feita</option>    
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data e hora de início:</strong>
                    <input name="datetime_inicio" type="text" class="form-control" 
                        placeholder="Escolha uma data e hora de inicio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Data e hora de Término:</strong>
                    <input name="datetime_fim" type="text" class="form-control" 
                        placeholder="Escolha uma data e hora de fim">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>

    </form>
@endsection