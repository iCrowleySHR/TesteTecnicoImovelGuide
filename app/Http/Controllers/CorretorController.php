<?php

namespace App\Http\Controllers;

use App\Http\Requests\CorretorRequest;
use App\Models\Corretor;

class CorretorController extends Controller
{
    public function index()
    {
        $corretores = Corretor::all();
        return view('corretores.index', compact('corretores'));
    }

    public function store(CorretorRequest $request)
    {
        Corretor::create($request->validated());

        return redirect('/')->with('success', 'Corretor cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $corretor = Corretor::findOrFail($id);
        return view('corretores.edit', compact('corretor'));
    }

    public function update(CorretorRequest $request, $id)
    {
        $corretor = Corretor::findOrFail($id);
        $corretor->update($request->validated());

        return redirect('/')->with('success', 'Corretor atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $corretor = Corretor::findOrFail($id);
        $corretor->delete();

        return redirect('/')->with('success', 'Corretor excluído com sucesso!');
    }
}
