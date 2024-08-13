<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Mail\PasswordChanged;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PasswordController extends Controller
{
    public function index(){
        return view('frontend.profil.change_password');
    }
    public function changePassword(ChangePasswordRequest $request)

    {
        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Ancien Mot de passe Incorrect']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        Mail::to($user->email)->send(new PasswordChanged());

        return back()->with('status', 'Mot de passe changer avec Succes!');
    }
}
