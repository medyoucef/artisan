<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom', 'profession', 'photo', 'telephone',
        'facebook', 'instagram', 'whatsapp',
        'ville', 'adresse'
    ];

    // Relation avec Profession (un artisan appartient à une profession)
    public function profession()
    {
        return $this->belongsTo(Profession::class, 'profession');
    }
}
