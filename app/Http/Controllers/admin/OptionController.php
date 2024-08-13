<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::all();
        return view('admin.options.index', compact('options'));
    }

    public function create()
    {
        $option = new Option();
        return view('admin.options.form', compact('option'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:options',
            'description' => 'required',
        ]);

        Option::create($validatedData);

        return redirect()->route('admin.options.index')
            ->with('success', 'Option créée avec succès.');
    }

    public function edit(Option $option)
    {
        return view('admin.options.form', compact('option'));
    }

    public function update(Request $request, Option $option)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:options,code,' . $option->id,
            'description' => 'required',
        ]);

        $option->update($validatedData);

        return redirect()->route('admin.options.index')
            ->with('success', 'Option mise à jour avec succès.');
    }

    public function destroy(Option $option)
    {
        $option->delete();

        return redirect()->route('admin.options.index')
            ->with('success', 'Option supprimée avec succès.');
    }
}
