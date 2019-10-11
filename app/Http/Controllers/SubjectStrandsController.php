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
     public function create(Subject $subject, Strand $strand)
    {
		$subjects = Subject::all();
		$strands = Strand::all();
      return view('subjectstrands.create',compact('subjectstrand', 'subjects', 'strands'));
    }
     public function store(Subject $subject, Strand $strand)
    {
        request()->validate([
            'subject_id' => 'required',
            'strand_id' => 'required',
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
     public function edit(SubjectStrand $subjectstrand, Subject $subject, Strand $strand)
    {
       $subjects = Subject::all();
        $strands = Strand::all();
      return view('subjectstrands.edit',compact('subjectstrand', 'subjects', 'strands'));
    }
     public function update(SubjectStrand $subjectstrand, Subject $subject, Strand $strand)
    {
        request()->validate([
            'subject_id' => 'required',
            'strand_id' => 'required',
            'semester' => 'required',
            'grade_level' => 'required',
        ]);
        $subjectstrand->semester = request()->semester;
        $subjectstrand->strand_id = request()->strand_id;
        $subjectstrand->subject_id = request()->subject_id;
        $subjectstrand->grade_level = request()->grade_level;
        $subjectstrand->save();
        return redirect('/home/subjectstrands');
    }
}
