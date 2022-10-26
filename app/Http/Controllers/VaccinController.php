<?php

namespace App\Http\Controllers;

use App\Models\Vaccin;
use Illuminate\Http\Request;
use PDF;

class VaccinController extends Controller
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
            $vaccins = Vaccin::where('nomVaccin', 'like', "%$search%")
            ->orwhere('description', 'like', "%$search%")->get();
        }else{
            $vaccins = \App\Models\Vaccin::get();
        }

        return view('vaccins.index', compact('vaccins','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vaccins.create');
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
            'nomVaccin' => 'required',
            'expDate' =>'required',
            'description' =>'required',
        ]);
        Vaccin::create($request->all());

        return redirect()->route('vaccins.index')
        ->with('success','Vaccin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function show(Vaccin $vaccin)
    {
        return view('vaccins.show',compact('vaccin'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaccin $vaccin)
    {
        return view('vaccins.edit',compact('vaccin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaccin $vaccin)
    {
        $request->validate([

        ]);
        $vaccin->update($request->all());

        return redirect()->route('vaccins.index')
               ->with('success','Vaccin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccin  $vaccin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaccin $vaccin)
    {
        $vaccin->delete();

        return redirect()->route('vaccins.index')
               ->with('success','Vaccin deleted successsfully');
    }

    public function pdf(){
        $vaccins = Vaccin::get();
         $pdf = PDF::loadView('vaccins.pdf',[
            'vaccins'=>$vaccins
         ]);
        return $pdf->download( 'vaccins list.pdf');
    }

    public function search()
    {
        request()->validate([
            'q' => 'required|min:3',
        ]);
        $q = request()->input('q');
        if($q){
            $v = Vaccin::where('nomVaccin', 'like', "%$q%")
            ->orwhere('description', 'like', "%$q%")->get();
        }
        else{
            $v= Vaccin::all();
        }
            // ->paginate(4);
        return view('vaccins.search')->with('vaccins', $v);

        // if( $request->nomVaccin){
        //     Vacin::where('nomVaccin', 'LIKE', "%" . $request->nomVaccin . "%")->get();
        // }
        // if( $request->expDate){
        //     Vacin::where('expDate', 'LIKE', "%" . $request->expDate . "%")->get();
        // }
        // if( $request->description){
        //     Vacin::where('description', 'LIKE', "%" . $request->description . "%")->get();
        // }
        // if( $request->nomVaccin && $request->expDate){
        //     Vacin::where('nomVaccin', 'LIKE', "%" . $request->nomVaccin . "%")
        //     ->Where('expDate', 'LIKE', "%" . $request->expDate . "%")
        //     ->get();
        // }
        // if( $request->nomVaccin && $request->description){
        //     Vacin::where('nomVaccin', 'LIKE', "%" . $request->nomVaccin . "%")
        //     ->Where('description', 'LIKE', "%" . $request->description . "%")->get();
        // }
        // if( $request->nomVaccin && $request->expDate && $request->description){
        //     Vacin::where('nomVaccin', 'LIKE', "%" . $request->nomVaccin . "%")
        //     ->Where('expDate', 'LIKE', "%" . $request->expDate . "%")
        //     ->Where('description', 'LIKE', "%" . $request->description . "%")->get();
        // }
        
        // Vacin::paginate(5);
        // Vacin::where('nomVaccin', 'LIKE', "%" . $request->nomVaccin . "%")->get();
        // return view('vaccins.search', compact('vaccins'));
    }
}
