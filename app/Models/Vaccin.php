<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccin extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'nomVaccin','expDate','description',
    ];
    public function vaccinations(){
        return $this->hasMany(Vaccination::class);
    }
}
