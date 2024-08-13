<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\VerifyEmailNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SignUpController extends Controller
{
    public function showSignupForm()
    {
        return view('frontend.auth.register');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'adresse' => 'required|string',
            'telephone' => 'required|string',
            'code_postal' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'profil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required|string|min:8|confirmed',
        ]);

        DB::transaction(function () use ($request) {
            $user = new User();
            $user->name = $request->name;
            $user->lastname = $request->lastname;
            $user->date_naissance = $request->date_naissance;
            $user->adresse = $request->adresse;
            $user->telephone = $request->telephone;
            $user->code_postal = $request->code_postal;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->role = 'client';

            if ($request->hasFile('profil')) {
                $path = $request->file('profil')->store('profils', 'public');
                $user->profil = $path;
            }

            $user->email_verification_token = Str::random(60);
            $user->save();

            $user->notify(new VerifyEmailNotification($user));
        });

        return redirect()->route('verification.notice')->with('success', 'Un e-mail de vérification a été envoyé à votre adresse. Veuillez vérifier votre boîte de réception.');
    }

    public function verifyEmail($token)
    {
        $user = User::where('email_verification_token', $token)->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Le lien de vérification est invalide.');
        }

        $user->email_verified_at = now();
        $user->email_verification_token = null;
        $user->save();

        return redirect()->route('login')->with('success', 'Votre e-mail a été vérifié. Vous pouvez maintenant vous connecter.');
    }

    public function resendVerificationEmail(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Aucun utilisateur trouvé avec cette adresse e-mail.');
        }

        if ($user->hasVerifiedEmail()) {
            return back()->with('info', 'Votre e-mail a déjà été vérifié.');
        }

        $user->email_verification_token = Str::random(60);
        $user->save();

        $user->notify(new VerifyEmailNotification($user));

        return back()->with('success', 'Un nouveau lien de vérification a été envoyé à votre adresse e-mail.');
    }
}
