<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'photo'];

    // Une profession a plusieurs artisans
    public function artisans()
    {
        return $this->hasMany(Artisan::class, 'profession');
    }
}
