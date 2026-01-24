<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Artisan;
class ArtisanController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('artisans');

        if ($request->filled('profession')) {
            $query->where('profession', 'like', '%' . $request->profession . '%');
        }

        if ($request->filled('ville')) {
            $query->where('ville', 'like', '%' . $request->ville . '%');
        }

        $artisans = $query->get();

        return view('front.art_ind', compact('artisans'));
    }

    public function search(Request $request)
{
    $query = Artisan::query();

    if ($request->filled('ville')) {
        $query->where('ville', 'like', '%' . $request->ville . '%');
    }

    if ($request->filled('profession')) {
        $query->where('profession', 'like', '%' . $request->profession . '%');
    }

    $artisans = $query->get();

    $html = view('partials.artisan_cards', compact('artisans'))->render();

    return response()->json(['html' => $html]);
}

public function rejoindre(Request $request)
{
    $request->validate([
        'profession' => 'required|string|max:255',
    ]);

    $user = Auth::user();

    // Vérifier s’il n'est pas déjà dans la table artisans
    $existe = Artisan::where('nom', $user->name)->first();
    if ($existe) {
        return back()->with('success', 'Vous êtes déjà enregistré comme artisan.');
    }

    Artisan::create([
        'nom' => $user->name,
        'profession' => $request->profession,
        'photo' => $user->photo,
        'telephone' => null, // tu peux ajouter un champ dans le profil plus tard
        'facebook' => null,
        'instagram' => null,
        'whatsapp' => null,
        'ville' => $user->ville,
        'adresse' => $user->adresse,
        'created_at' => now(),
    ]);

    return back()->with('success', 'Bienvenue parmi les artisans !');
}
}
