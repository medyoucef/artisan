<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login_register');
    }

    public function register(Request $request)
    {
        // Validation des champs
        $request->validate([
            'username' => 'required|string|max:255',
            'type_user' => 'required|string|in:client,artisan,societe_artisan',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        

        // Création de l'utilisateur
        $user = User::create([
            'name' => $request->username,
            'type_user' => $request->type_user,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // dd($user);
        // Connexion automatique
        Auth::login($user);

        // Redirection vers la page home
        return redirect()->route('home')->with('success', 'Inscription réussie, bienvenue !');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return back()->with('login_error', 'Email ou mot de passe incorrect');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
