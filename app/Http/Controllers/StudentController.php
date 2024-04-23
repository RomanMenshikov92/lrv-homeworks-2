<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view('students.create', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Group $group)
    {
        $validatedData = $request->validate([
            'surname' => 'required|max:255',
            'name' => 'required|max:255'
        ]);

        $student = new Student($validatedData);
        $group->students()->save($student);
        return redirect()->route('groups.show', $group);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group, Student $student)
    {
        return view('students.show', compact('student', 'group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group, Student $student)
    {
        return view('students.edit', compact('student', 'group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group, Student $student)
    {
        $validatedData = $request->validate([
            'surname' => 'required|max:255',
            'name' => 'required|max:255'
        ]);

        $student->update($validatedData);
        return redirect()->route('groups.show', $group);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group, Student $student)
    {
        $student->delete();
        return redirect()->route('groups.show', $group);
    }
}
