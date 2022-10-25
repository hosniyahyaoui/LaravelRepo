<?php
namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use DB;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function handle()
    {
        return Socialite::driver('twitter')->redirect();
    }
    public function callbackHandle(){

        $user = Socialite::driver('twitter')->stateless()->user();
        $data = User::where('email', $user->nickname)->first();

        if(is_null($data)) {

            $usersData['name'] = $user->name ;
            $usersData['email'] =  $user->nickname;

            $data = User::create($usersData);

        }
        Auth::login($data);

        return redirect('home');
    }
}
