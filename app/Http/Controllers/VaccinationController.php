<?php

namespace App\Http\Controllers;

use App\Models\Vaccination;
use App\Models\Vaccin;
use Illuminate\Http\Request;
use PDF;

class VaccinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *@param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $vaccinations= Vaccination::where('vaccin_id', 'like', "%$search%")
            ->orwhere('resultat', 'like', "%$search%")->get();
        }else{
            $vaccinations = \App\Models\Vaccination::get();
        }
       

        return view('vaccinations.index', compact('vaccinations', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vaccin=Vaccin::all();
        return view('vaccinations.create', compact('vaccin'));
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
            'dateVaccination' => 'required',
            'estFait' =>'required',
            'resultat' =>'required',
        ]);
        // Vaccination::create($request->all());
        $vaccination= new \App\Models\Vaccination;
        $vaccination->dateVaccination= $request->dateVaccination;
        $vaccination->estFait= $request->estFait;
        $vaccination->resultat= $request->resultat;
        $vaccination->vaccin_id=$request->vaccin_id;
        $vaccination->save();
        return redirect()->route('vaccinations.index')
        ->with('success','Vaccination sheet created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccination  $vaccination
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccination $vaccination)
    {
        return view('vaccinations.show',compact('vaccination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccination  $vaccination
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccination $vaccination)
    {
        $vaccin=Vaccin::all();
        return view('vaccinations.edit',compact('vaccination','vaccin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccination  $vaccination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccination $vaccination)
    {
        $request->validate([

        ]);
        $vaccination->update($request->all());
        $vaccination->vaccin_id=$request->vaccin_id;
        $vaccination->save();

        return redirect()->route('vaccinations.index')
               ->with('success','Vaccination sheet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccination  $vaccination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccination $vaccination)
    {
        $vaccination->delete();

        return redirect()->route('vaccinations.index')
               ->with('success','Vaccination sheet deleted successsfully');
    }

    public function pdf(){
        $vaccinations = Vaccination::get();
         $pdf = PDF::loadView('vaccinations.pdf',[
            'vaccinations'=>$vaccinations
         ]);
        return $pdf->download( 'vaccination sheets list.pdf');
    }
}
