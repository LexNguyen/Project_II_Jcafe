@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Edit Employee
@stop

@section('contentheader_title')
	Edit Employee
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postEmployee') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<!-- <label>Id</label> -->
						<input type="text" name="id" class="form-control" 
                        value="{{ ($employee != null)?$employee->id:'' }}" style="display: none;">
					</div>
                    <div class="form-group">
                    <label>Position</label>
						<select class="form-control"  name="password" value="{{ ($employee != null)?$employee->password:'' }}">
								<option>Quan Ly</option>
                                <option>Nhan Vien</option>	
                        </select>
                    </div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control"
                        value="{{ ($employee != null)?$employee->name:'' }}">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control"
                        value="{{ ($employee != null)?$employee->address:'' }}">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control"
                        value="{{ ($employee != null)?$employee->phone:'' }}">
					</div>
                    <div class="form-group">
						<label>Age</label>
						<input type="text" name="age" class="form-control"
                        value="{{ ($employee != null)?$employee->age:'' }}">
					</div>
					<button class="btn btn-success">Edit</button>
				</form>
			</div>
		</div>
	</div>
@stop