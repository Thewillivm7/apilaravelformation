<?php

namespace App\Models;

use App\Models\Annonce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function annonce()
    {
        return $this->hasMany(Annonce::class);
    }
}
