<?php

namespace App\Http\Controllers;

use App\Models\Devis;

class AdminDevisController extends Controller
{
    public function index()
    {
        // Récupérer tous les devis
        $devis = Devis::with(['artisan', 'client', 'conversation'])
                      ->orderBy('created_at', 'desc')
                      ->get();

        return view('admin.devis.index', compact('devis'));
    }
}

