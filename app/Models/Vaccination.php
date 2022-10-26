<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'dateVaccination','estFait','resultat',
    ];
    public function vaccin(){
        return $this->belongsTo(Vaccin::class);
    }
}
