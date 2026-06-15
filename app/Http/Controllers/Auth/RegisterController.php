<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Artisan;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{


    use RegistersUsers;



    protected $redirectTo = '/home';



    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'       => ['required', 'string', 'max:255'],
            'email'      => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'   => ['required', 'string', 'min:8'],
            'type_user'  => ['required', 'string'],

            // Champs artisan
            'profession' => ['nullable', 'string'],
            'ville'      => ['nullable', 'string'],
        ]);
    }


    
    protected function create(array $data)
    {
        // 1. Créer le user
        $user = User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'type_user' => $data['type_user'],
        ]);

        // 2. Si c’est un artisan → créer l’artisan associé
        if ($user->type_user === 'artisan') {
            Artisan::create([
                'user_id'    => $user->id,
                'nom'        => $user->name,
                'profession' => $data['profession'] ?? null,
                'ville'      => $data['ville'] ?? null,
                'adresse'    => $data['adresse'] ?? null,
                'telephone'  => $data['telephone'] ?? null,
            ]);
        }

        return $user;
    }
}
