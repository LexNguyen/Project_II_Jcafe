@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Sua San Pham
@stop

@section('contentheader_title')
	Sua San Pham
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="get" action="{{ route('showOrder') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<!-- <label>Id</label> -->
						<input type="text" name="id" class="form-control" 
                        value="{{ ($order != null)?$order->id:'' }}" style="display: none;">
					</div>
					<div class="form-group">
						<label>Order_date</label>
						<input type="text" name="name" class="form-control"
                        value="{{ ($order != null)?$order->order_date:'' }}">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
@stop