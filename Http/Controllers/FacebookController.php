<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use DB;
class FacebookController extends Controller
{
    public function provider(){
       return Socialite::driver('facebook')->redirect();
    }
    public function handleCallback()
    {
     $user = Socialite::driver('facebook')->stateless()->user();

    $data = User::where('email', $user->email)->first();

    if(is_null($data)) {

        $users['name'] = $user->name ;
        $users['email'] =  $user->email;

        $data = User::create($users);

    }
    Auth::login($data);

    return redirect('home');
    }
}
