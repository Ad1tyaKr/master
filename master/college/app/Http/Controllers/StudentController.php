<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\view\view;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::where('status', 1)->get();
        return view ('students.index')-> with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       

        $request->validate([
            'stdId' => 'required|string|max:225',
            'stdName' => 'required|alpha',
            'branch' => 'required|string|max:225',
            'phoneNo' => 'required|digits:10',
            'email' => 'required|email',
            'address' => 'required|string|max:225',
        ]);

        Student::create([
            'stdId' => $request->stdId,
            'stdName' => $request->stdName,
            'branch' => $request->branch,
            'phoneNo' => $request->phoneNo,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect('students')->with('status','Student addedd successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'stdId' => 'required|string|max:225',
            'stdName' => 'required|alpha',
            'branch' => 'required|string|max:225',
            'phoneNo' => 'required|digits:10',
            'email' => 'required|email',
            'address' => 'required|string|max:225',
        ]);

        $student->update([
            'stdId' => $request->stdId,
            'stdName' => $request->stdName,
            'branch' => $request->branch,
            'phoneNo' => $request->phoneNo,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect('students')->with('status','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->status = false;
        $student->save();
    
    return redirect('students')->with('success', 'Student deleted successfully');
    
    }
}
