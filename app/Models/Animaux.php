<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animaux extends Model
{

           /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    
    
    'nom',
    'description',
    'datedeNaissance',
    'datedubutTraitement',
    'type_maladie',
    'dureeTraitement',
    'prixTraitement',
    'espece','age','poid'

    ];
    use HasFactory;

    public function locales(){
        return $this->belongsTo('App\Models\Locaux');
    }
}
