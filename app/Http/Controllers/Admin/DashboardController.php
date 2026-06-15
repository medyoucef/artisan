<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Application\Services\DashboardService;

class DashboardController extends Controller
{
    protected DashboardService $service;

    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $stats = $this->service->getDashboardStats();
        return view('admin.dashboard', compact('stats'));
    }

    public function artisans()
    {
        return view('admin.artisans', [
            'artisans' => $this->service->listArtisans()
        ]);
    }

    public function societes()
    {
        return view('admin.societes', [
            'societes' => $this->service->listSocietes()
        ]);
    }

    public function users()
    {
        return view('admin.users', [
            'users' => $this->service->listUsers()
        ]);
    }

    public function messages()
    {
        return view('admin.messages', [
            'messages' => $this->service->listMessages()
        ]);
    }

    

    public function professions()
    {
        return view('admin.professions', [
            'professions' => $this->service->listProfessions()
        ]);
    }
}
