@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Quản Lý Nguyên Liệu
@stop

@section('contentheader_title')
    Quản Lý Nguyên Liệu
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postMaterial') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter name">
					</div>
					<div class="form-group">
						<label>Import_date</label>
						<input type="text" name="import_date" class="form-control" placeholder="Enter import_date">
					</div>
                    <div class="form-group">
						<label>Number</label>
						<input type="text" name="number" class="form-control" placeholder="Enter number">
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