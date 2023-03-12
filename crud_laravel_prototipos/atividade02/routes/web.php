<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Estudante;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-estudante', function (Request $dados) {
    Estudante::create([
     'nome' => $dados->nome_alunos,
     'cpf' => $dados->cpf_alunos,
     'nascimento' => $dados->nascimento_alunos,
    ]);
    echo "Estdante Cadastrado com Sucesso";
    });

Route::get('/mostrar-estudante/{id_do_estudante}', function ($id_do_estudante) {
    $estudante = Estudante::find($id_do_estudante);
    echo $estudante->nome;
    echo "<br />";
    echo $estudante->cpf;
    echo "<br />";
    echo $estudante->nascimento;
});

Route::get('/mostrar-estudante/{id_do_estudante}', function ($id_do_estudante) {
    $estudante = Estudante::find($id_do_estudante);
    return view('editar_estudante', ['estudante' => $estudante]);
});

Route::post('/atualizar-estudante/{id_do_estudante}', function (Request $dados, $id_do_estudante) {
    $estudante = Estudante::find($id_do_estudante);
    $estudante->nome = $estudante->nome_alunos;
    $estudante->cpf = $estudante->cpf_alunos;
    $estudante->nascimento = $estudante->nascimento_alunos;
    $estudante->save();
    echo "Estudante alterado com sucesso!";
});