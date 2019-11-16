@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Them Don Hang
@stop

@section('contentheader_title')
	Them Don Hang
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postOrder') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Order date</label>
						<input type="text" name="order_date" class="form-control" placeholder="Enter order date(y-m-d)">
					</div>
					<button class="btn btn-success">Add</button>
				</form>
			</div>
		</div>
	</div>
@stop