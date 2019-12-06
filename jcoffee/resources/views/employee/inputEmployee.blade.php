@extends('adminlte::layouts.app')

@section('htmlheader_title')
Management's Employee
@stop

@section('contentheader_title')
Management's Employee
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postEmployee') }}">
					{{ csrf_field() }}
                    <div class="form-group">
                    <label>Position</label>
						<select class="form-control"  name="password">
								<option>Quan Ly</option>
                                <option>Nhan Vien</option>	
                        </select>
                    </div>
                    <div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter name" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" placeholder="Enter address" required>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" placeholder="Enter phone" required>
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="text" name="age" class="form-control" placeholder="Enter age" required>
					</div>
					<button class="btn btn-success">Add</button>
				</form>
			</div>
		</div>
	</div>
@stop