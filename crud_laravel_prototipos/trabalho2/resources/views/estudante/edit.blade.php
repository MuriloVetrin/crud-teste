@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Editar Estudante</h1>
                <form action="{{ route('estudantes.update', $estudante->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="{{ $estudante->nome }}" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $estudante->cpf }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nascimento">Data de Nascimento:</label>
                        <input type="date" name="nascimento" id="nascimento" class="form-control" value="{{ $estudante->nascimento }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
