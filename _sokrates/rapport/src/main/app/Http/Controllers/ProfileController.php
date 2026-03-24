<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\SocieteArtisan;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('front.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validation des champs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'adresse' => 'nullable|string|max:255',
            'ville' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'photo' => 'nullable|image|max:2048',
        ]);

        // Traitement de la photo s'il y en a une
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $user->photo = $photoPath;
        }

        // Mise à jour des autres champs
        $user->name = $request->name;
        $user->email = $request->email;
        $user->adresse = $request->adresse;
        $user->ville = $request->ville;
        $user->telephone = $request->telephone;
        $user->save();

        // ➕ Si type = societe_artisan et les infos sont complètes → ajouter à societe_artisan
        if ($user->type_user === 'societe_artisan') {
            if ($user->adresse && $user->ville && $user->telephone && $user->photo) {
                SocieteArtisan::updateOrCreate(
                    ['nom_societe' => $user->name],
                    [
                        'ville'     => $user->ville,
                        'adresse'   => $user->adresse,
                        'telephone' => $user->telephone,
                        'photo'     => $user->photo,
                    ]
                );
            }
        }

        return redirect()->back()->with('success', 'Profil mis à jour avec succès.');
    }
}
