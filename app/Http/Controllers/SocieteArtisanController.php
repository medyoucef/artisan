<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SocieteArtisan;
class SocieteArtisanController extends Controller
{
    public function index(Request $request)
    {
        $societes = $this->filterSocietes($request);
        return view('front.art_soc', compact('societes'));
    }

    public function search(Request $request)
{
    $query = SocieteArtisan::query();

    if ($request->has('adresse') && !empty($request->adresse)) {
        $query->where('adresse', 'like', '%' . $request->adresse . '%');
    }

    $societes = $query->get();

    $html = view('partials.societes_liste', compact('societes'))->render();

    return response()->json(['html' => $html]);
}


    

    private function filterSocietes(Request $request)
    {
        $query = DB::table('societe_artisan');

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('ville')) {
            $query->where('ville', 'like', '%' . $request->ville . '%'); // ou une vraie colonne `ville` si elle existe
        }

        return $query->get();
    }
    public function create() 
    { return view('admin.societes.create'); } 
    /** Enregistrement */ 
    public function store(Request $request) 
    { $request->validate([ 
        'name' => 'required|string|max:255', 
        'description' => 'nullable|string', 
        'photo' => 'nullable|image|max:2048' ]);
        $data = $request->only(['name', 'description']);
        if ($request->hasFile('photo'))
        { $data['photo'] = $request->file('photo')->store('societes', 'public'); } 
    SocieteArtisan::create($data);
    return redirect()->route('admin.societes') 
    ->with('success', 'Société ajoutée avec succès'); 
} 
}
    

