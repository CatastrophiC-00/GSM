<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectStrand;
use App\Subject;
use App\Strand;
class SubjectStrandsController extends Controller
{
    public function subjectstrand()
    {
    	$subjectstrands = SubjectStrand::all();
    	return view('subjectstrands.index')->with('subjectstrands', $subjectstrands);
    }
     public function create()
    {
		$subjects = Subject::all();
		$strands = Strand::all();
    	return view('subjectstrands.create',compact('subjects', 'strands'));
    }
     public function store()
    {
        request()->validate([
            'semester' => 'required',
            'grade_level' => 'required',
        ]);
        
    	$subjectstrand = new SubjectStrand;
    	$subjectstrand->semester = request()->semester;
    	$subjectstrand->strand_id = request()->strand_id;
    	$subjectstrand->subject_id = request()->subject_id;
    	$subjectstrand->grade_level = request()->grade_level;
    	$subjectstrand->save();

        return redirect('/home/subjectstrands');
    }
}
