<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $table = 'ville'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['nom']; 

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
}