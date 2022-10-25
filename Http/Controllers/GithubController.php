<?php
namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use DB;
use Illuminate\Http\Request;

class GithubController extends Controller
{
    public function redirectToProvider(){
        return Socialite::driver('github')->redirect();

    }
    public function handleProviderCallback(Request $request ){
        $user = Socialite::driver('github')->stateless()->user();

        $data = User::where('email',$user->email)->first();
        if(is_null($data)) {
            $users['name'] = $user->nickname;
            $users['email'] = $user->email;
            $data = User::create($users);

        }
        Auth::login($data);
        return redirect('home');
    }
}
