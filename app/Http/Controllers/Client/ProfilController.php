<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index(){
        //$reservation = Auth::user()->reservations;
        //dd($reservation);
        return view('frontend.profil.dashboard');
    }
    public function profil(){

        return view('frontend.profil.daashboard_profil');
    }
    public function showEditProfil(){
        return view('frontend.profil.edit_profil');
    }
}
