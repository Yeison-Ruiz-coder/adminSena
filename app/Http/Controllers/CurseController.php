<?php

namespace App\Http\Controllers;

use App\Models\Curse;
use Illuminate\Http\Request;

class CurseController extends Controller
{
    public function index()
    {
        $curses = Curse::all();
        return view('curses.index', compact('curses'));
    }

    public function create()
    {
        return view('curses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'curse_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
        ]);
        Curse::create($request->all());
        return redirect()->route('curses.index')->with('success', 'Curso creado correctamente');
    }

    public function show(Curse $curse)
    {
        return view('curses.show', compact('curse'));
    }

    public function edit(Curse $curse)
    {
        return view('curses.edit', compact('curse'));
    }

    public function update(Request $request, Curse $curse)
    {
        $request->validate([
            'curse_number' => 'required|string|max:255',
            'day' => 'required|string|max:255',
        ]);
        $curse->update($request->all());
        return redirect()->route('curses.index')->with('success', 'Curso actualizado correctamente');
    }

    public function destroy(Curse $curse)
    {
        $curse->delete();
        return redirect()->route('curses.index')->with('success', 'Curso eliminado correctamente');
    }
}
