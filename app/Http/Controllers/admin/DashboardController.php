<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Artisan;
use App\Models\SocieteArtisan;
use App\Models\Message;
use App\Models\Profession;



class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'users' => User::count(),
            'artisans' => Artisan::count(),
            'societes' => SocieteArtisan::count(),
            'messages' => Message::count(),
            'categories' => Profession::count(),
        ]);
    }
}
