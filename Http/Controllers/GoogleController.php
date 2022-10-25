<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use DB;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function provider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback(){
        $user = Socialite::driver('google')->stateless()->user();
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
