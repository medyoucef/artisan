<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artisan;
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
            'username'   => 'required|string|max:255',
            'type_user'  => 'required|string|in:client,artisan,societe_artisan',
            'email'      => 'required|string|email|max:255|unique:users',
            'password'   => 'required|string|min:6',
            'profession' => 'nullable|string',
            'ville'      => 'nullable|string',
        ]);

        // 1. Création du user
        $user = User::create([
            'name'      => $request->username,
            'type_user' => $request->type_user,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);

        // 2. Si c’est un artisan → créer l’artisan associé
        if ($user->type_user === 'artisan') {
            Artisan::create([
                'user_id'    => $user->id,
                'nom'        => $user->name,
                'profession' => $request->profession,
                'ville'      => $request->ville,
                'adresse'    => $request->adresse ?? null,
                'telephone'  => $request->telephone ?? null,
            ]);
        }

        // 3. Connexion automatique
        Auth::login($user);

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
