<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Animaux;
use Illuminate\Support\Facades\DB;

class AnimauxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $animaux = DB::table('animaux')->select('animaux.*')->join('locaux', 'animaux.local_id', '=', 'locaux.id')->get();
    //  dd($animaux);
   return view('animaux/index',compact('animaux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locaux = DB::table('locaux')->get();

        return view('animaux/create',compact('locaux'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

    //  $animaux = new Animaux();

    $request->validate([
        'nom' => 'required',
        'description' =>'required',
        'datedeNaissance' =>'required',
        'datedubutTraitement'=>'required',
        'type_maladie'=>'required',
        'dureeTraitement'=>'required',
        'prixTraitement'=>'required',
        'espece'=>'required',
        'age'=>'required',
        'poid'=>'required',
        'local_id'=>'required',
    ]);
        $nom = $request->input('nom');
        $description = $request->input('description');
        $datedeNaissance = $request->input('datedeNaissance');
        $datedubutTraitement = $request->input('datedubutTraitement');
        $type_maladie = $request->input('type_maladie');
        $dureeTraitement = $request->input('dureeTraitement');
        $prixTraitement = $request->input('prixTraitement');
        $espece = $request->input('espece');
        $age = $request->input('age');
        $poid = $request->input('poid');
        $local =    $request->input('local_id');



        $data=array('nom'=>$nom,"description"=>$description,"datedeNaissance"=>$datedeNaissance,"datedubutTraitement"=>$datedubutTraitement,"type_maladie"=>$type_maladie,"dureeTraitement"=>$dureeTraitement,"prixTraitement"=>$prixTraitement,"espece"=>$espece,"age"=>$age,"poid"=>$poid,"local_id"=>$local);
        DB::table('animaux')->insert($data);
       // $animaux->save();
      
       return redirect('/animaux');



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
//         dd($id);

//        $animaux= DB::table('animaux')->where('id', $id)->get();
// dd($animaux);
//       // var_dump($animaux->description);
//        return view('animaux/edit',compact('animaux'));
    }

    public function edit2($id)
    { //$animaux = DB::table('animaux')->select('animaux.*')->join('locaux', 'animaux.local_id', '=', 'locaux.id')->get();
      //  dd($id);
        $animaux= DB::table('animaux')->where('id', $id)->get();
        $locaux= DB::table('locaux')->get();

        foreach ($animaux as $key => $value) {
         //   dd($value);
       
       
             return view('animaux/edit',compact('value','locaux'));
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
        dd($id);
    }
    public function update2(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'description' =>'required',
            'datedeNaissance' =>'required',
            'datedubutTraitement'=>'required',
            'type_maladie'=>'required',
            'dureeTraitement'=>'required',
            'prixTraitement'=>'required',
            'espece'=>'required',
            'age'=>'required',
            'poid'=>'required',
            'local'=>'required',
        ]);
        $nom = $request->input('nom');
        $description = $request->input('description');
        $datedeNaissance = $request->input('datedeNaissance');
        $datedubutTraitement = $request->input('datedubutTraitement');
        $type_maladie = $request->input('type_maladie');
        $dureeTraitement = $request->input('dureeTraitement');
        $prixTraitement = $request->input('prixTraitement');
        $espece = $request->input('espece');
        $age = $request->input('age');
        $poid = $request->input('poid');
        $local =    $request->input('local_id');
        $data=array('nom'=>$nom,"description"=>$description,"datedeNaissance"=>$datedeNaissance,"datedubutTraitement"=>$datedubutTraitement,"type_maladie"=>$type_maladie,"dureeTraitement"=>$dureeTraitement,"prixTraitement"=>$prixTraitement,"espece"=>$espece,"age"=>$age,"poid"=>$poid,"local_id"=>$local);
     //   DB::table('animaux')->insert($data);
        DB::table('animaux')->where('id',$id)->update($data);
        return redirect('/animaux');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd(1);
    }

    public function delete($id)
    {

         DB::table('animaux')->where('id', $id)->delete();
      

       return redirect('/animaux');




    }
}
