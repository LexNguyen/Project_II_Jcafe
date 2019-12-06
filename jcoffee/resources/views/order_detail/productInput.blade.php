@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Order Detail
@stop

@section('contentheader_title')
Order Detail
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postO') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Id_Order</label>
						<select class="form-control" name="id_o">
							@foreach ($orders as $item)
								<option value="{{$item->id}}">{{$item->id}}</option>	
							@endforeach
                        </select>
						
					</div>
					<div class="form-group">
						<label>Id_Product</label>
						<select class="form-control" name="id_p">
							@foreach ($products as $item)
								<option value="{{$item->id}}">{{$item->id}}</option>	
							@endforeach
                        </select>
					</div>
					<div class="form-group">
						<label>Number</label>
						<input type="text" name="number" class="form-control" placeholder="Enter number" required>
					</div>
					<div class="form-group">
						<label>Table_number</label>
						<input type="text" name="table_number" class="form-control" placeholder="Enter table_number" required>
					</div>

					<div class="form-group">
						<label>Customer_request</label>
						<input type="text" name="customer_request" class="form-control" placeholder="Enter customer_request" required>
					</div>
					<button class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
@stop