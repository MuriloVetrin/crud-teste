<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade02</title>
</head>

<body>

    <form action="/editar-estudante/{{ $estudante->id }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nome</label>
        <input type="text" placeholder="Digite o seu nome" name="nome_alunos" value="{{ $estudante->nome }}">
        <br /> <br />
        <label for="">CPF</label>
        <input type="text" placeholder="Digite o seu CPF" name="cpf_alunos" value="{{ $estudante->cpf }}">
        <br /> <br />
        <label for="">Nascimento</label>
        <input type="text" placeholder="Digite a sua data de nascimento" name="nascimento_alunos" value="{{ $estudante->nascimento }}">
        <br /> <br />
        <button>Eviar Cadastro</button>
    </form>

</body>

</html>