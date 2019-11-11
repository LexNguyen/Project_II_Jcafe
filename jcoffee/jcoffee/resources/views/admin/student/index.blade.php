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
				<a href="{{ route('viewAdd') }}"><button class="btn btn-success" style="margin-bottom: 15px;">Add Product</button></a>
				<table class="table table-bordered">
					<tr>
						<th>No</th>
						<th>Id_order</th>
						<th>Id_Product</th>
						<th>Number</th>
						<th>Table_number</th>
						<th>Price</th>
						<th>Customer_request</th>
					</tr>
					@foreach ($studentList as $item)
						<tr id="r_{{ $item->id }}">
							<td>{{ $index++ }}</td>
							<td>{{ $item->id_o }}</td>
							<td>{{ $item->id_p }}</td>
							<td>{{ $item->number }}</td>
							<td>{{ $item->table_number }}</td>
							<td>{{ $item->price_detail }}</td>
							<td>{{ $item->customer_request }}</td>
						</tr>
					@endforeach
				</table>
				{{ $studentList->links() }}
			</div>
		</div>
	</div>
@stop