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
        $buses = Bus::where('status', 1)->get();
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
        $assignedDriverIds = Bus::pluck('dName')->toArray();
        $drivers = Driver::where('status', 1)->whereNotIn('dName', $assignedDriverIds)->get();
       
        $roads = Road::where('status', 1)->get();
        
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
            'dName' => 'required|alpha|exists:drivers,dName' ,
            'insurance_id' => 'required|string|max:255',
            'validity' => 'required|date',
            'incharge' => 'required|string|max:255',
            'RTitle' => 'required|string|exists:roads,RTitle'
        ]);
      
        Bus::create([
            'title' => $request->input('title'),
            'regNo' => $request->input('regNo'),
            'dName' => $request->input('dName'),
            'insurance_id' => $request->input('insurance_id'),
            'validity' => $request->input('validity'),
            'incharge' => $request->input('incharge'),
            'RTitle' => $request->input('RTitle'),
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
        
        $assignedDriverIds = Bus::pluck('dName')->toArray();
        $drivers = Driver::where('status', 1)->whereNotIn('dName', $assignedDriverIds)->get();
       
        $roads = Road::where('status', 1)->get();
        // $assignedRoadIds = Bus::pluck('RTitle')->toArray();
        // $roads = Road::where('status', 1)->whereNotIn('RTitle', $assignedRoadIds)->get();

        return view('buses.edit', compact('bus','drivers','roads'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bus $bus)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'regNo' => 'required|alpha|max:255',
            'dName' => 'required|exists:drivers,dName', 
            'insurance_id' => 'required|string|max:255',
            'validity' => 'required|date',
            'incharge' => 'required|string|max:255',
            'RTitle' => 'required|string|exists:roads,RTitle'
        ]);
       
      
        $bus->update([
            'title' => $request->input('title'),
            'regNo' => $request->input('regNo'),
            'dName' => $request->input('dName'),
            'insurance_id' => $request->input('insurance_id'),
            'validity' => $request->input('validity'),
            'incharge' => $request->input('incharge'),
            'RTitle' => $request->input('RTitle'),
        ]);
        
        return redirect('buses')->with('status','Buses addedd successfully');
       
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        $bus->status = false;
        $bus->save();
        return redirect('/buses')->with('status','Bus deleted successfully');
    }
}
