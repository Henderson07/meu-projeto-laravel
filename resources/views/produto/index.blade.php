@extends('produto.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel 8 CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('produto.create') }}"> Criar novo produto</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Detalhes</th>
            <th width="280px">Ações</th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->descricao }}</td>
            <td>{{ $produto->detail }}</td>
            <td>
                <form action="{{ route('produto.destroy',$produto->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('produto.show',$produto->id) }}">Listar</a>
                    <a class="btn btn-primary" href="{{ route('produto.edit',$produto->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $produtos->links() }}


@endsection