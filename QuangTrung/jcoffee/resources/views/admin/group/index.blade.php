@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ $classRoom->class_name }}
@stop

@section('contentheader_title')
	{{ $classRoom->class_name }}
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-success" style="margin-bottom: 15px;">Add Student</button>
				<table class="table table-bordered">
					<tr>
						<th>No</th>
						<th>Full Name</th>
						<th>Roll No</th>
						<th>Age</th>
						<th>Address</th>
						<th>Email</th>
						<th width="80px"></th>
						<th width="80px"></th>
					</tr>
					@foreach ($list as $item)
						<tr>
							<td>{{ $index++ }}</td>
							<td>{{ $item->fullname }}</td>
							<td>{{ $item->rollno }}</td>
							<td>{{ $item->age }}</td>
							<td>{{ $item->address }}</td>
							<td>{{ $item->email }}</td>
							<td><button class="btn btn-warning">Edit</button></td>
							<td><button class="btn btn-danger">Delete</button></td>
						</tr>
					@endforeach
				</table>
				{{ $list->links() }}
			</div>
		</div>
	</div>
@stop