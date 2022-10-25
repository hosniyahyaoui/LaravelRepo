<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use DB;
use Illuminate\Http\Request;

class LinkedinController extends Controller
{
    public function provider(){
        return Socialite::driver('linkedin')->redirect();
    }
    public function providerCallback(){
        $user = Socialite::driver('linkedin')->stateless()->user();
        $data = User::where('email',$user->email)->first();
        if(is_null($data)) {
            $users['name'] = $user->name;
            $users['email'] = $user->email;
            $data = User::create($users);

        }
        Auth::login($data);
        return redirect('home');
    }
}
