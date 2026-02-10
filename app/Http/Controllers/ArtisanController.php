<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Artisan;

class ArtisanController extends Controller
{
    /* ---------------------------------------------------------
     |  FRONT — Liste + Recherche + Rejoindre
     --------------------------------------------------------- */

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

        $existe = Artisan::where('nom', $user->name)->first();
        if ($existe) {
            return back()->with('success', 'Vous êtes déjà enregistré comme artisan.');
        }

        Artisan::create([
            'nom' => $user->name,
            'profession' => $request->profession,
            'photo' => $user->photo,
            'telephone' => null,
            'facebook' => null,
            'instagram' => null,
            'whatsapp' => null,
            'ville' => $user->ville,
            'adresse' => $user->adresse,
            'created_at' => now(),
        ]);

        return back()->with('success', 'Bienvenue parmi les artisans !');
    }


    /* ---------------------------------------------------------
     |  ADMIN — CRUD COMPLET
     --------------------------------------------------------- */

    /** Page liste admin */
    public function adminIndex()
    {
        $artisans = Artisan::all();
        return view('admin.artisans', compact('artisans'));
    }

    /** Page formulaire création */
    public function create()
    {
        return view('admin.artisans.create');
    }

    /** Enregistrement artisan */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'ville' => 'required|string|max:255',
            'adresse' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'photo' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('artisans', 'public');
        }

        Artisan::create($data);

        return redirect()->route('admin.artisans')
                         ->with('success', 'Artisan ajouté avec succès');
    }

    /** Page édition */
    public function edit($id)
    {
        $artisan = Artisan::findOrFail($id);
        return view('admin.artisans_edit', compact('artisan'));
    }

    /** Mise à jour artisan */
    public function update(Request $request, $id)
    {
        $artisan = Artisan::findOrFail($id);

        $request->validate([
            'nom' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'telephone' => 'nullable|string|max:20',
            'ville' => 'required|string|max:255',
            'adresse' => 'nullable|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'photo' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('artisans', 'public');
        }

        $artisan->update($data);

        return redirect()->route('admin.artisans')
                         ->with('success', 'Artisan mis à jour avec succès');
    }

    /** Suppression artisan */
    public function delete($id)
    {
        Artisan::destroy($id);

        return redirect()->route('admin.artisans')
                         ->with('success', 'Artisan supprimé avec succès');
    }
}
