<?php

namespace App\Http\Controllers;

use App\Models\Road;
use Illuminate\Http\Request;

class RoadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roads = Road::where('status', 1)->get()->map(function ($road) {
            
            $road->Timing = $road->TimingsS . ' - ' . $road->TimingsE;
            return $road;
        });
    
        return view('roads.index', compact('roads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'RTitle' => 'required|string',
            'PickUp' => 'required|string|max:225',
            'Destination' => 'required|string|max:225',
            'TimingsS' => 'required|date_format:H:i',
            'TimingsE' => 'required|date_format:H:i',
        ]);

        Road::create([
            'RTitle' => $request->RTitle,
            'PickUp' => $request->PickUp,
            'Destination' => $request->Destination,
            'TimingsS' => $request->TimingsS,
            'TimingsE' => $request->TimingsE,
        ]);

        return redirect('roads')->with('status','Student updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Road $road)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Road $road)
    {
        return view('roads.edit', compact('road'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Road $road)
    {
        $request->validate([
            'RTitle' => 'required|string',
            'PickUp' => 'required|string|max:225',
            'Destination' => 'required|string|max:225',
            'TimingsS' => 'required|date_format:H:i',
            'TimingsE' => 'required|date_format:H:i',
        ]);

        $road->update([
            'RTitle' => $request->RTitle,
            'PickUp' => $request->PickUp,
            'Destination' => $request->Destination,
            'TimingsS' => $request->TimingsS,
            'TimingsE' => $request->TimingsE,
        ]);
        return redirect('roads')->with('status','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Road $road)
    {
        $road->status = false;
        $road->save();
        return redirect('/roads')->with('status','Student deleted successfully');
    }
}
