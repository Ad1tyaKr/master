<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\view\view;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers= Driver::all();
        return view ('drivers.index')-> with('drivers', $drivers);
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'dName' => 'required|string|max:225',
            'dId' => 'required|string|max:225',
            'Idproof' => 'required|string|max:225',
            'DphoneNo' => 'required|string|max:225',
            'Demail' => 'required|string|max:225',
        ]);

        Driver::create([
            'dName' => $request->dName,
            'dId' => $request->dId,
            'Idproof' => $request->Idproof,
            'DphoneNo' => $request->DphoneNo,
            'Demail' => $request->Demail,
        ]);

        return redirect('drivers')->with('status','Driver addedd successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        return view('drivers.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'dName' => 'required|string|max:225',
            'dId' => 'required|string|max:225',
            'Idproof' => 'required|string|max:225',
            'DphoneNo' => 'required|string|max:225',
            'Demail' => 'required|string|max:225',
        ]);

        $driver->update([
            'dName' => $request->dName,
            'dId' => $request->dId,
            'Idproof' => $request->Idproof,
            'DphoneNo' => $request->DphoneNo,
            'Demail' => $request->Demail,
        ]);

        return redirect('drivers')->with('status','Driver edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
         $driver->delete();
        return redirect('/drivers')->with('status','Driver deleted successfully');
    }
}
