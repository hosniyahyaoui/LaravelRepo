<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locaux extends Model
{

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      
    'titre',
    'description',
  'dateCreation',
    'occupation',//occupe=true,ou non occupe
    'capacite','adresse'
    

       
    ];

    public function animals(){
      return $this->hasMany('App\Models\Locaux');
  }

    use HasFactory;
    
    
}
