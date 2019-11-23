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
				<form method="post" action="{{ route('postEditUser') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<!-- <label>Id</label> -->
						<input type="text" name="id" class="form-control" 
                        value="{{ ($user != null)?$user->id:'' }}" style="display: none;">
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control"
                        value="{{ ($user != null)?$user->name:'' }}">
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="text" name="age" class="form-control"
                        value="{{ ($user != null)?$user->sale:'' }}">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control"
                        value="{{ ($user != null)?$user->price:'' }}">
					</div>
                    <div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control"
                        value="{{ ($user != null)?$user->price:'' }}">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
@stop