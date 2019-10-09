@extends('layouts.master')
@extends('layouts.nav')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Subject ID</th>
					<th scope="col">Strand ID</th>
					<th scope="col">Semester</th>
					<th scope="col">Grade Level</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subjectstrands as $subjectstrand)
					<tr>
						<td>{{ $subjectstrand->id }}</td>
						<td>{{ $subjectstrand->subject->name}}</td>
						<td>{{ $subjectstrand->strand->name}}</td>
						<td>{{ $subjectstrand->semester }}</td>
						<td>{{ $subjectstrand->grade_level }}</td>
						<td><a href="/home/subjectstrands/{{$subjectstrand->id}}/edit">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/home/subjectstrands/add'>Add New Subject Strand</a>
	</div>
@endsection