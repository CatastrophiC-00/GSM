@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/home/subjectstrands/store">
			@csrf
			 <input name='subject_id' type='hidden' value='{{ $subject->name }}'>
		    <input name='strand_id' type='hidden' value='{{ $strands->name }}'>
		  <div class="form-group">
		    <label for="Semester">Semester</label>
		    <input type="text" class="form-control" name="semester">
		  </div>
		  <div class="form-group">
		    <label for="Grade Level">Grade Level</label>
		    <input type="text" class="form-control" name="grade_level">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection