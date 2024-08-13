<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\view\view;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colleges = College::where('status', 1)->get();
        return view('colleges.index', compact('colleges')); 
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('colleges.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'division' => 'required|string|max:225',
            'college' => 'required|string|max:225',
            'district' => 'required|string|max:225',
            'principal' => 'required|string|max:225',
            'pNo' => 'required|digits:10',
            'director' => 'required|string|max:225',
            'dNo' => 'required|digits:10',
            'busLink' => 'nullable',
        ]);

        College::create([
            'division' => $request->division,
            'college' => $request->college,
            'district' => $request->district,
            'principal' => $request->principal,
            'pNo' => $request->pNo,
            'director' => $request->director,
            'dNo' => $request->dNo,
            'busLink' => $request->busLink== true ?1:0,
        ]);

        return redirect('colleges')->with('status','College addedd successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(College $college)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, College $college)
    {
        $request->validate([
            'division' => 'required|string|max:225',
            'college' => 'required|string|max:225',
            'district' => 'required|string|max:225',
            'principal' => 'required|string|max:225',
            'pNo' => 'required|digits:10',
            'director' => 'required|string|max:225',
            'dNo' => 'required|digits:10',
            'busLink' => 'nullable',
        ]);

        $college->update([
            'division' => $request->division,
            'college' => $request->college,
            'district' => $request->district,
            'principal' => $request->principal,
            'pNo' => $request->pNo,
            'director' => $request->director,
            'dNo' => $request->dNo,
            'busLink' => $request->busLink== true ?1:0,
        ]);

        return redirect('colleges')->with('status','College updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(College $college)
    {
        $college->status = false;
        $college->save();
        return redirect('/colleges')->with('status','Data deleted successfully');
    }
}
