<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssociationController extends Controller
{
    public function add(Request $request)
    {

       $association = Association::factory()->create([
            'association_name' => $request->name,
            'association_location' => $request->location,
            "association_status" => $request->status,
            "association_phone_number" => $request->phone,
        ]);

        return redirect('association/get');

    }
    public function update(Request $request, int $i)
    {
        $association = Association::find($i);
        $association->association_name=$request->name;
        $association->association_location=$request->location;
        $association->association_status=$request->status;
        $association->association_phone_number=$request->phone;
        $association->save();
        return redirect()->route('association/get')
            ->with('success','Product updated successfully');
    }
    public function delete($id){
        $res=Association::where('id',$id)->delete();
        return redirect('association/get');
    }
    public function list(Request $request)
    {
        $associations=Association::all();
        return view('associationManagement/listassociations',['associations' => $associations]);
       // return $associations;
    }
}
