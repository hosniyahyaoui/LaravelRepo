<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Locaux;
use Illuminate\Support\Facades\DB;

class LocauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locaux = DB::table('locaux')->get();
            //  dd($animaux);
           return view('locaux/index',compact('locaux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locaux = DB::table('locaux')->get();


        return view('locaux/create',compact('locaux'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' =>'required',
            'dateCreation' =>'required',

            'capacite'=>'required',
            'adresse'=>'required',

        ]);

        $titre = $request->input('titre');
        $description = $request->input('description');
        $dateCreation = $request->input('dateCreation');
        $occupation = $request->get('occupation');
        $capacite = $request->input('capacite');
        $adresse = $request->input('adresse');

        $data=array('titre'=>$titre,"description"=>$description,"dateCreation"=>$dateCreation,"occupation"=>$occupation,"capacite"=>$capacite,"adresse"=>$adresse);

        DB::table('locaux')->insert($data);
       // $animaux->save();

       return redirect('/locaux');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function edit2($id)
    { //$animaux = DB::table('animaux')->select('animaux.*')->join('locaux', 'animaux.local_id', '=', 'locaux.id')->get();
      //  dd($id);
        $locaux= DB::table('locaux')->where('id', $id)->get();
        //$locaux= DB::table('locaux')->get();

        foreach ($locaux as $key => $value) {
          // dd($value);


             return view('locaux/edit',compact('value'));
            }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function update2(Request $request, $id)
    {
        $request->validate([


        ]);
        $titre = $request->input('titre');
        $description = $request->input('description');
        $dateCreation = $request->input('dateCreation');
        $occupation = $request->get('occupation');
        $capacite = $request->input('capacite');
        $adresse = $request->input('adresse');

        $data=array('titre'=>$titre,"description"=>$description,"dateCreation"=>$dateCreation,"occupation"=>$occupation,"capacite"=>$capacite,"adresse"=>$adresse);
     //   DB::table('animaux')->insert($data);
        DB::table('locaux')->where('id',$id)->update($data);
        return redirect('/locaux');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {

         DB::table('locaux')->where('id', $id)->delete();


       return redirect('/locaux');




    }
}
