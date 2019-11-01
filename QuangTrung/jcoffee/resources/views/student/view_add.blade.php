@extends('layouts.student')

@section('main-content')
<form method="post" action="{{ route('postStudent') }}">
	{{ csrf_field() }}
	<input type="text" name="id" value="{{ ($student != null)?$student->id:'' }}" style="display: none;">
	<div class="table-wrapper">
		<div class="form-group">
        	<label>Roll No</label>
        	<input type="text" name="rollno" class="form-control" placeholder="Enter rollno" value="{{ ($student != null)?$student->rollno:'' }}">
        </div>
        <div class="form-group">
        	<label>Full Name</label>
        	<input type="text" name="fullname" class="form-control" placeholder="Enter full name" value="{{ ($student != null)?$student->fullname:'' }}">
        </div>
        <div class="form-group">
        	<label>Age</label>
        	<input type="number" name="age" class="form-control" placeholder="Enter age" value="{{ ($student != null)?$student->age:'' }}">
        </div>
        <div class="form-group">
        	<label>Email</label>
        	<input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ ($student != null)?$student->email:'' }}">
        </div>
        <div class="form-group">
        	<label>Address</label>
        	<input type="text" name="address" class="form-control" placeholder="Enter address" value="{{ ($student != null)?$student->address:'' }}">
        </div>
        <button class="btn btn-success">Add</button>
    </div>
</form>
@stop