<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class ControllerFlight extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::all();
        return view('vista', compact('flights'));
        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    //insertar los datos en DB
    {
        
        $request->validate([
            'name' => "required|max:20|string"
        ]);


        $flight = Flight::create([
            'name'=>$request->name
        ]);
        // response()->json([
        //     'response'=>'success',

        // ]);

        if ($flight){
            return redirect()->back()->with('success', 'your flight has been saved in database');
        }else{
            return redirect()->back()->with('fail', "your flight hasn't been saved in database");

        }
        
        // dd($request);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show";
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Flight $flight)

    {
        
        $flight = Flight::find($flight->id);
        // dd($flight->id);
        return view('edit', compact('flight'));
        
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Flight $flight)
    {
        
       
        $request->validate([
            'name' => "required|max:20|string"
        ]);

        $flight->update([
            'name' => $request->name

        ]);

        if ($flight){
            return redirect()->back()->with('success', 'your flight has been saved in database');
        }else{
            return redirect()->back()->with('fail', "your flight hasn't been saved in database");

        }
        

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        $flight = Flight::find($flight->id);
        $flight->delete();
        return redirect()->route('flights.index');
     
        //
    }
}
