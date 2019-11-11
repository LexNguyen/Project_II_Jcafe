@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Them San Pham
@stop

@section('contentheader_title')
	Them San Pham
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postProduct') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Id</label>
						<input type="text" name="id" class="form-control" placeholder="Enter Id product">
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter name">
					</div>
					<div class="form-group">
						<label>Sale</label>
						<input type="text" name="sale" class="form-control" placeholder="Enter sale">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control" placeholder="Enter price">
					</div>
					<button class="btn btn-success">Add</button>
				</form>
			</div>
		</div>
	</div>
@stop