<?php

namespace App\Http\Controllers;

use App\Models\studentmngt;
use Illuminate\Http\Request;

class studentmngtController extends Controller
{
    public function index()
    {
        $students = studentmngt::all();
        return view('student.index', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'mname' => 'required|max:255',
            'add' => 'required|max:255',
            'dob' => 'required|date',
        ]);
        studentmngt::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'mname' => $request->mname,
            'add' => $request->add,
            'dob' => $request->dob,
        ]);

        return redirect()->route('student.index')->with('status', 'Student added successfully!');
    }
 public function edit(int $id)
    {
        $student = studentmngt::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'mname' => ['required', 'string', 'max:255'],
            'add'   => ['required', 'string', 'max:255'],
            'dob'   => ['required', 'date'],
        ]);

        $student = studentmngt::findOrFail($id);
        $student->update($validated);

        return redirect()->back()->with('status', 'Student Updated Successfully!');
    }

    public function destroy(int $id)
    {
        $student = studentmngt::findOrFail($id);
        $student->delete();

        return redirect()->back()->with('status', 'Student Deleted');
    }

}
