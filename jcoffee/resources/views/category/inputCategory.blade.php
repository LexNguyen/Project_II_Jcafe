@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Categor(Product)
@stop

@section('contentheader_title')
    Categor(Product)
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postCategory') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter name">
					</div>
					<button class="btn btn-success">Add</button>
				</form>
			</div>
		</div>
	</div>
@stop