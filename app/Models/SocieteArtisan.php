<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocieteArtisan extends Model
{
    use HasFactory;
    

    protected $table = 'societe_artisan';

    protected $fillable = [
        'name',
        'description',
        'telephone',
        'adresse',
        'email',
        'photo'
    ];
    
    

}
