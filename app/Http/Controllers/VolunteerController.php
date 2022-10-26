<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use App\Models\volunteer;


class VolunteerController extends Controller
{
    //
    public function register(Request $request)
    {

        $volunteer=volunteer::factory()->create([
            'volunteer_full_name'=>$request->name,
            'volunteer_email'=>$request->email,
            "password"=>$request->password,
            "association_id"=>0,
            "date_of_birth"=>$request->date_of_birth,
        ]);
       $associations=Association::all();
       // Auth::login($volunteer,true);
        return view('volunteersManagement/chooseAssociations',['associations'=>$associations,'volunteer_id'=>$volunteer->id]);

    }
    public function  login(Request $request)
    {
        $q=DB::table('volunteers')->where('volunteer_email',$request->email)
            ->where('password',$request->password)->first();
        /**
         * {"id":6,"volunteer_full_name":"Ahmed Benaissa","volunteer_email":"baissahmed@gmail.com","email_verified_at":null,"password":"123456789","association_id":"0","date_of_birth":"1999-03-27 00:00:00","remember_token":null,
         * "created_at":"2022-10-13 20:05:52","updated_at":"2022-10-13 20:05:52"}
         */

        return view('chooseassociation',['id' => $q->volunteer_full_name]);
    }
    public function choose(int $i,int $j)
    {
              $volunteer=volunteer::find($i);
              $volunteer->association_id=$j;
              $volunteer->save();
              return 'successfully joined association';
    }
}
