<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Artisan;
use App\Models\SocieteArtisan;
use App\Models\Message;
use App\Models\Profession;
use App\Models\Devis;
use Illuminate\Http\Request;



class DashboardController extends Controller
{
    public function index()
{
    return view('admin.dashboard', [
        'users'      => User::count(),
        'artisans'   => Artisan::count(),
        'societes'   => SocieteArtisan::count(),
        'messages'   => Message::count(),
        'categories' => Profession::count(),
        'devis'      => Devis::count(), 
    ]);
}

    public function artisans() {
        $artisans = Artisan::all();
        return view('admin.artisans', compact('artisans'));
    }
    
    public function societes() {
        $societes = SocieteArtisan::all();
        return view('admin.societes', compact('societes'));
    }
    
    public function users() {
        $users = User::all();
        return view('admin.users', compact('users'));
    }
    
    public function messages() {
        $messages = Message::all();
        return view('admin.messages', compact('messages'));
    }

    public function professions() {
        $professions = Profession::all(); // ou Category si ton modèle s'appelle autrement
        return view('admin.professions', compact('professions'));
    }
    // la suppression dans la dashboard
    public function deleteUser($id) {
        User::findOrFail($id)->delete();
        return back()->with('success', 'Utilisateur supprimé avec succès');
    }
    
    public function deleteArtisan($id) {
        Artisan::findOrFail($id)->delete();
        return back()->with('success', 'Artisan supprimé avec succès');
    }
    
    public function deleteSociete($id) {
        SocieteArtisan::findOrFail($id)->delete();
        return back()->with('success', 'Société supprimée avec succès');
    }
    
    public function deleteMessage($id) {
        Message::findOrFail($id)->delete();
        return back()->with('success', 'Message supprimé avec succès');
    }
    
    public function deleteProfession($id) {
        Profession::findOrFail($id)->delete();
        return back()->with('success', 'Profession supprimée avec succès');
    }

    public function editUser($id) {
        $user = User::findOrFail($id);
        return view('admin.users_edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
{
    $user = User::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
    ]);

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    return redirect()->route('admin.users')->with('success', 'Utilisateur modifié avec succès');
}

    public function editProfession($id) {
        $profession = Profession::findOrFail($id);
        return view('admin.professions_edit', compact('profession'));
    }

    
    public function updateProfession(Request $request, $id) {
        $profession = Profession::findOrFail($id);

        $request->validate([
            'nom' => 'required',
            'description' => 'nullable',
        ]);

        $profession->update([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);

    return redirect()->route('admin.professions')->with('success', 'Profession modifiée avec succès');
}

    // ajouter profession
    public function createProfession() {
        return view('admin.professions_create');
    }
    
   
    public function storeProfession(Request $request) {
    $request->validate([
        'name' => 'required',
        'description' => 'nullable',
    ]);

    Profession::create([
        'name' => $request->name,
        'description' => $request->description,
    ]);

    return redirect()->route('admin.professions')->with('success', 'Profession ajoutée avec succès');
}

    // modifier artisan
    public function editArtisan($id) {
        $artisan = Artisan::findOrFail($id);
        return view('admin.artisans_edit', compact('artisan'));
    }
    
    
    public function updateArtisan(Request $request, $id) {
        $artisan = Artisan::findOrFail($id);

        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'telephone' => 'nullable',
            'adresse' => 'nullable',
            'profession' => 'nullable',
        ]);

        $artisan->update([
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'profession' => $request->profession,
        ]);

        return redirect()->route('admin.artisans')->with('success', 'Artisan modifié avec succès');
    }

    public function editSociete($id) {
        $societe = SocieteArtisan::findOrFail($id);
        return view('admin.societes_edit', compact('societe'));
    }

    
public function updateSociete(Request $request, $id) {
    $societe = SocieteArtisan::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'telephone' => 'nullable',
        'adresse' => 'nullable',
        'description' => 'nullable',
    ]);

    $societe->update([
        'name' => $request->name,
        'telephone' => $request->telephone,
        'adresse' => $request->adresse,
        'description' => $request->description,
    ]);

    return redirect()->route('admin.societes')->with('success', 'Société modifiée avec succès');
}


    
    
}
