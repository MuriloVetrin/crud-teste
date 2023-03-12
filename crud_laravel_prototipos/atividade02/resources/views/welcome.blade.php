<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade02</title>
</head>

<body>

    <form action="/cadastrar-estudante" method="post">
        @csrf
        <label for="">Nome</label>
        <input type="text" placeholder="Digite o seu nome" name="nome_alunos">
        <br /> <br />
        <label for="">CPF</label>
        <input type="text" placeholder="Digite o seu CPF" name="cpf_alunos">
        <br /> <br />
        <label for="">Nascimento</label>
        <input type="text" placeholder="Digite a sua data de nascimento" name="nascimento_alunos">
        <br /> <br />
        <button>Eviar Cadastro</button>
    </form>

</body>

</html>