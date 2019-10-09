@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/home/teachers/{{ $teacher->id }}/update">
		@csrf
		  <input name='id' type='hidden' value='{{ $teacher->id }}'>
		  <label for="Advisory Section">Advisory Section</label>
		  <select name='advisory_section' class='form-control'>
		  	@foreach($sections as $section)
		  	<option value='{{ $section->name }}'>
		  		{{ $section->name }}
		  	</option>
			@endforeach
		</select>
		<br>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection