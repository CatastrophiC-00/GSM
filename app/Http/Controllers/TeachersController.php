<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Section;
class TeachersController extends Controller
{
     public function teacher()
    {
    	$teachers = Teacher::all();
    	return view('teachers.index')->with('teachers', $teachers);
    }

    public function create()
    {
    	return view('teachers.create');
    }
     public function edit(Teacher $teacher)
    {
        $sections = Section::all();
        return view('teachers.edit', compact('teacher', 'sections'));

    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
        ]);
        
    	$teacher = new Teacher;
    	$teacher->name = request()->name;
    	$teacher->advisory_section = request()->advisory_section;
    	$teacher->save();

        return redirect('/home/teachers');
    }

    public function update(Teacher $teacher)
    {
        request()->validate([
            'advisory_section' => 'required',
        ]);
        $teacher->advisory_section = request()->advisory_section;
        $teacher->save();
        return redirect('/home/teachers');
    }
}
