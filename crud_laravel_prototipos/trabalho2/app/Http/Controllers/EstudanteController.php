<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudante;

class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudantes = Estudante::all();
        return view('estudantes.index', compact('estudantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudante = new Estudante([
            'nome' => $request->get('nome'),
            'cpf' => $request->get('cpf'),
            'nascimento' => $request->get('nascimento')
        ]);
        $estudante->save();
        return redirect('/estudantes')->with('success', 'Estudante adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estudante = Estudante::find($id);
    return view('estudantes.show', compact('estudante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudante = Estudante::find($id);
        return view('estudantes.edit', compact('estudante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estudante = Estudante::findOrFail($id);
        $estudante->nome = $request->input('nome');
        $estudante->cpf = $request->input('cpf');
        $estudante->nascimento = $request->input('nascimento');
        $estudante->save();

        return redirect()->route('estudantes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudante = Estudante::findOrFail($id);
        $estudante->delete();

        return redirect()->route('estudantes.index');
    }
}
