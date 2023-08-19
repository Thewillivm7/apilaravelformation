<?php

namespace App\Models;

use App\Models\Categorie;
use App\Models\Commentaire;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function commentaire()
    {
        return $this->belongsTo(Commentaire::class);
    }


}
