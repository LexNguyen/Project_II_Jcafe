@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Them Nhan Vien
@stop

@section('contentheader_title')
	Them Nhan Vien
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postUser') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter name">
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="text" name="age" class="form-control" placeholder="Enter Age">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" placeholder="Enter address">
					</div>
                    <div class="form-group">
						<label>Phone</label>
						<input type="text" name="phonr" class="form-control" placeholder="Enter phone">
					</div>
					<button class="btn btn-success">Add</button>
				</form>
			</div>
		</div>
	</div>
@stop