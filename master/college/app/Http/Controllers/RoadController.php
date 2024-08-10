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
        $roads= Road::all();
        return view('roads.index')-> with('roads', $roads);
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
            'Title' => 'required|string|max:225',
            'PickUp' => 'required|string|max:225',
            'Destination' => 'required|string|max:225',
            'Timings' => 'required|string|max:225',
        ]);

        Road::create([
            'Title' => $request->Title,
            'PickUp' => $request->PickUp,
            'Destination' => $request->Destination,
            'Timings' => $request->Timings,
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
            'Title' => 'required|string|max:225',
            'PickUp' => 'required|string|max:225',
            'Destination' => 'required|string|max:225',
            'Timings' => 'required|string|max:225',
        ]);

        $road->update([
            'Title' => $request->Title,
            'PickUp' => $request->PickUp,
            'Destination' => $request->Destination,
            'Timings' => $request->Timings,
        ]);
        return redirect('roads')->with('status','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Road $road)
    {
        $road->delete();
        return redirect('/roads')->with('status','Student deleted successfully');
    }
}
