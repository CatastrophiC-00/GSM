@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/home/subjectstrands/{{ $subjectstrand->id }}/update">
		@csrf
		 <input name='id' type='hidden' value='{{ $subjectstrand->id }}'>
			<div class="form-group">
		    <label for="subject">Subject</label>
			  <select name='subject_id' class='form-control'>
		  	@foreach($subjects as $subject)
		  	<option value='{{ $subject->name }}'>
		  		{{ $subject->name }}
		  	</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		    <label for="strand">Strand</label>
		 <select name='strand_id' class='form-control'>
		  	@foreach($strands as $strand)
		  	<option value='{{ $strand->name }}'>
		  		{{ $strand->name }}
		  	</option>
			@endforeach
		</select>
	</div>
		  <div class="form-group">
		    <label for="Semester">Semester</label>
		    <input type="text" class="form-control" name="semester">
		  </div>
		  <div class="form-group">
		    <label for="Grade Level">Grade Level</label>
		    <input type="text" class="form-control" name="grade_level">
		  </div>
		<br>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection