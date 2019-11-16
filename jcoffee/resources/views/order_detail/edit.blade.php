@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Nhap San Pham
@stop

@section('contentheader_title')
	Nhap San Pham
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postO') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Id_Order</label>
						<input type="text" name="id_o" class="form-control" placeholder="Enter Id_order"
                        value="{{ ($order_detail != null)?$order_detail->id_o:'' }}">
					</div>
					<div class="form-group">
						<label>Id_Product</label>
						<input type="text" name="id_p" class="form-control" placeholder="Enter Id_product"
                        value="{{ ($order_detail != null)?$order_detail->id_p:'' }}">
					</div>
					<div class="form-group">
						<label>Number</label>
						<input type="text" name="number" class="form-control" placeholder="Enter number"
                        value="{{ ($order_detail != null)?$order_detail->number:'' }}">
					</div>
                    <div class="form-group">
						<label>Table Number</label>
						<input type="text" name="number" class="form-control" placeholder="Enter table number"
                        value="{{ ($order_detail != null)?$order_detail->table_number:'' }}">
					</div>
					<div class="form-group">
						<label>Customer_request</label>
						<input type="text" name="customer_request" class="form-control" placeholder="Enter customer_request"
                        value="{{ ($order_detail != null)?$order_detail->customer_request:'' }}">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
@stop