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
						<!-- <label>Id</label> -->
						<input type="text" name="id" class="form-control" 
                        value="{{ ($category != null)?$category->id:'' }}" style="display: none;">
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control"
                        value="{{ ($category != null)?$category->name:'' }}">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
@stop