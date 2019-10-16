@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Thêm Sinh Viên
@stop

@section('contentheader_title')
	Thêm Sinh Viên
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="{{ route('postStudent') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="fullname" class="form-control" placeholder="Enter full name">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label>Roll No</label>
						<input type="text" name="rollno" class="form-control" placeholder="Enter rollno">
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="text" name="age" class="form-control" placeholder="Enter age">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" placeholder="Enter address">
					</div>
					<button class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
@stop

@section('js')
<script type="text/javascript">
	$('[name=email]').change(function() {
		email = $('[name=email]').val()
		$.get('{{ route('searching_by_email') }}?email='+email, function(data, status) {
			if(data == 'failed') {
				//email da ton tai
				$('[name=email]').css('background-color', 'red')
			} else {
				//email chua ton tai
				$('[name=email]').css('background-color', 'green')
			}
		})
	})
</script>
@stop