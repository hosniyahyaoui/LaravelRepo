<?php
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\LockableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class volunteer extends Authenticatable
{
use HasFactory;
    use HasFactory, Notifiable;
    use LockableTrait;

/**
* The attributes that are mass assignable.
*
* @var array<int, string>
*/



protected $fillable = [
'volunteer_full_name',
'volunteer_email',
'password',
'association_id',
    'date_of_birth',
];


}
