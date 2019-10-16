@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Quản Lý Lớp Học
@stop

@section('contentheader_title')
	Danh Sách Lớp Học
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<button class="btn btn-success" style="margin-bottom: 15px;">Add Student</button>
				<table class="table table-bordered">
					<tr>
						<th>No</th>
						<th>Class Name</th>
						<th width="80px"></th>
						<th width="80px"></th>
					</tr>
					@foreach ($classList as $item)
						<tr>
							<td>{{ $index++ }}</td>
							<td><a href="{{ route('group_show_all') }}?id={{ $item->id }}">{{ $item->class_name }}</a></td>
							<td><button class="btn btn-warning">Edit</button></td>
							<td><button class="btn btn-danger">Delete</button></td>
						</tr>
					@endforeach
				</table>
				{{ $classList->links() }}
			</div>
		</div>
	</div>
@stop