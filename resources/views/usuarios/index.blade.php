@extends('layouts.apps')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Usuários</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('usuarios.create') }}" title="Criar usuário"> <i class="fas fa-plus-circle"></i>
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
            <th>Login</th>
            <th>Senha</th>
            <th width="280px">Acões</th>
        </tr>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->login }}</td>
                <td>{{ $usuario->password }}</td>
                <td>
                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">

                        <a href="{{ route('usuarios.show', $usuario->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                        @if(Auth::id()==$usuario->id)
                        <a href="{{ route('usuarios.edit', $usuario->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>
                        @endif
                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $usuarios->links() !!}

@endsection
