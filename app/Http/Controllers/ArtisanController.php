<?php

namespace App\Http\Controllers;

use App\Application\Services\ArtisanService;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    private ArtisanService $service;

    public function __construct(ArtisanService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $filters = $request->only(['profession', 'ville']);
        $artisans = $this->service->search($filters);

        return view('front.art_ind', compact('artisans'));
    }


    

    public function search(Request $request)
    {
        $filters = $request->only(['profession', 'ville']);
        $artisans = $this->service->search($filters);

        $html = view('partials.artisan_cards', compact('artisans'))->render();

        return response()->json(['html' => $html]);
    }

    public function rejoindre(Request $request)
    {
        $request->validate([
            'profession' => 'required|integer|exists:professions,id',
        ]);

        $result = $this->service->registerAsArtisan($request->profession);

        return back()->with('success', $result['message']);
    }
}


