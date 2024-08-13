<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Driver;
use App\Models\Road;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\view\view;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buses= Bus::all();
        return view ('buses.index')-> with('buses', $buses);
        
    }

    public function viewDetail($id)
    {
        $bus = Bus::find($id);
        $roads = Road::all();
        $drivers = Driver::all();
        return view('buses.index', compact('bus', 'drivers', 'roads'));
       
    }
    /**
     * Show the form for creating a new resource.
     */
  
    public function create()
    {
        $assignedDriverIds = Bus::pluck('driver_id')->toArray();
        $drivers = Driver::whereNotIn('id', $assignedDriverIds)->get();
       
        $assignedRoadIds = Bus::pluck('road_id')->toArray();
        $roads = Road::whereNotIn('id', $assignedRoadIds)->get();
        
        return view('buses.create', compact('drivers', 'roads'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required|string|max:255',
            'regNo' => 'required|string|max:255',
            'driver_id' => 'required|exists:drivers,id', 
            'insurance_id' => 'required|string|max:255',
            'validity' => 'required|date',
            'incharge' => 'required|string|max:255',
            'road_id' => 'required|string|max:255'
        ]);
      
        Bus::create([
            'title' => $request->input('title'),
            'regNo' => $request->input('regNo'),
            'driver_id' => $request->input('driver_id'),
            'insurance_id' => $request->input('insurance_id'),
            'validity' => $request->input('validity'),
            'incharge' => $request->input('incharge'),
            'road_id' => $request->input('road_id'),
        ]);

        return redirect('buses')->with('status','Buses addedd successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bus $bus)
    {
        $assignedDriverIds = Bus::pluck('driver_id')->toArray();
        $drivers = Driver::whereNotIn('id', $assignedDriverIds)->get();
       
        $assignedRoadIds = Bus::pluck('road_id')->toArray();
        $roads = Road::whereNotIn('id', $assignedRoadIds)->get();

        return view('buses.edit', compact('bus','drivers', 'roads'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bus $bus)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'regNo' => 'required|string|max:255',
            'driver_id' => 'required|exists:drivers,id', 
            'insurance_id' => 'required|string|max:255',
            'validity' => 'required|date',
            'incharge' => 'required|string|max:255',
            'road_id' => 'required|string|max:255'
        ]);
       
      
        $bus->update([
            'title' => $request->input('title'),
            'regNo' => $request->input('regNo'),
            'driver_id' => $request->input('driver_id'),
            'insurance_id' => $request->input('insurance_id'),
            'validity' => $request->input('validity'),
            'incharge' => $request->input('incharge'),
            'road_id' => $request->input('road_id'),
        ]);
        
        return redirect('buses')->with('status','Buses addedd successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        $bus->delete();
        return redirect('/buses')->with('status','Bus deleted successfully');
    }
}
