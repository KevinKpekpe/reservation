<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EditUserController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'adresse' => 'required|string',
            'code_postal' => 'nullable|string|max:10',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'telephone' => 'required|string|max:20',
            'profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->date_naissance = $request->date_naissance;
        $user->adresse = $request->adresse;
        $user->code_postal = $request->code_postal;
        $user->email = $request->email;
        $user->telephone = $request->telephone;

        if ($request->hasFile('profil')) {
            if ($user->profil) {
                Storage::delete('public/' . $user->profil);
            }
            $path = $request->file('profil')->store('profils', 'public');
            $user->profil = $path;
        } elseif ($request->has('remove_profil') && $user->profil) {
            Storage::delete('public/' . $user->profil);
            $user->profil = null;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil mis à jour avec succès.');
    }
}
