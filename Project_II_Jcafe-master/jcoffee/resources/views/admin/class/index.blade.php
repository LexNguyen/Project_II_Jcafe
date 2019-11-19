@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Quản Lý nhân viên
@stop

@section('contentheader_title')
	Danh Sách Nhân Viên
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered">
					<tr style="color: #ff0000">
						<th>No</th>
						<th>Name</th>
						<th>Age</th>
						<th>Number Phone</th>
						<th>Address</th>
						
					</tr>
					@foreach ($classList as $item)
						<tr>
							<td>{{ $index++ }}</td>
							<td><a href="{{ route('group_show_all') }}?id={{ $item->id }}">{{ $item->class_name }}</a></td>
							
						</tr>
					@endforeach
				</table>
				{{ $classList->links() }}
			</div>
		</div>
	</div>
@stop