<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
    {
        $apprentices = Apprentice::all();
        return view('apprentices.index', compact('apprentices'));
    }

    public function create()
    {
        return view('apprentices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:apprentices,email',
            'cell_number' => 'required|string|max:20',
        ]);
        Apprentice::create($request->all());
        return redirect()->route('apprentices.index')->with('success', 'Aprendiz creado correctamente');
    }

    public function show(Apprentice $apprentice)
    {
        return view('apprentices.show', compact('apprentice'));
    }

    public function edit(Apprentice $apprentice)
    {
        return view('apprentices.edit', compact('apprentice'));
    }

    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:apprentices,email,' . $apprentice->id,
            'cell_number' => 'required|string|max:20',
        ]);
        $apprentice->update($request->all());
        return redirect()->route('apprentices.index')->with('success', 'Aprendiz actualizado correctamente');
    }

    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return redirect()->route('apprentices.index')->with('success', 'Aprendiz eliminado correctamente');
    }


}
