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
				<form method="post" action="{{ route('postEditProducts') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<!-- <label>Id</label> -->
						<input type="text" name="id" class="form-control" 
                        value="{{ ($product != null)?$product->id:'' }}" style="display: none;">
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control"
                        value="{{ ($product != null)?$product->name:'' }}">
					</div>
					<div class="form-group">
						<label>Sale</label>
						<input type="text" name="sale" class="form-control"
                        value="{{ ($product != null)?$product->sale:'' }}">
					</div>
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control"
                        value="{{ ($product != null)?$product->price:'' }}">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
@stop