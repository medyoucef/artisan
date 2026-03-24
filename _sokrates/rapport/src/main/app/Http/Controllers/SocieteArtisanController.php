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
    
}
