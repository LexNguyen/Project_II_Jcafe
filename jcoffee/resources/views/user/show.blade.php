@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Quan Ly San Pham
@stop

@section('contentheader_title')
	Danh Sách San Pham
@stop

@section('main-content')

	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th>No</th>
                        <th>Name</th>
						<th>Age</th>
						<th>Address</th>
                        <th>Phone</th>
                        <th width="80px"></th>
                        <th width="80px"></th>
					</tr>
					@foreach ($userList as $item)
						<tr>
							<td>{{ $index++ }}</td>
                            <td>{{ $item->name }}</td>
							<td>{{ $item->age }}</td>
							<td>{{ $item->address }}</td>
                            <th>{{ $item->phone}}</th>
                            <td><a href="{{ route('editUser') }}?id={{ $item->id }}">
                            <button class="btn btn-warning">Edit</button></a></td>
                            <td>
							<a href="{{ route('deleteUser') }}?id={{ $item->id }}">
                            <button class="btn btn-danger">delete</button></a>
							<!-- <button class="btn btn-danger" onclick="deleteProduct({{ $item->id }})">Delete</button> -->
                            </td>
						</tr>
						
					@endforeach
				</table>
				{{ $productList->links() }}
			</div>
		</div>
	</div>
@stop