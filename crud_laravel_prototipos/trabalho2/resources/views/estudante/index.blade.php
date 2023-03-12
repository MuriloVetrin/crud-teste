@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Estudantes</h1>
                <a href="{{ route('estudantes.create') }}" class="btn btn-primary mb-3">Novo Estudante</a>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Nascimento</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($estudantes as $estudante)
                            <tr>
                                <td>{{ $estudante->id }}</td>
                                <td>{{ $estudante->nome }}</td>
                                <td>{{ $estudante->cpf }}</td>
                                <td>{{ $estudante->nascimento }}</td>
                                <td>
                                    <a href="{{ route('estudantes.edit', $estudante->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                    <form action="{{ route('estudantes.destroy', $estudante->id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este estudante?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
