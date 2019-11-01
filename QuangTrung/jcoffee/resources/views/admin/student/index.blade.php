@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Quản Lý Sinh Viên
@stop

@section('contentheader_title')
	Danh Sách Sinh Viên
@stop

@section('main-content')
	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('viewAdd') }}"><button class="btn btn-success" style="margin-bottom: 15px;">Add Student</button></a>
				<table class="table table-bordered">
					<tr>
						<th>No</th>
						<th>Full Name</th>
						<th>Roll No</th>
						<th>Age</th>
						<th>Address</th>
						<th>Email</th>
						<th width="80px"></th>
						<th width="80px"></th>
					</tr>
					@foreach ($studentList as $item)
						<tr id="r_{{ $item->id }}">
							<td>{{ $index++ }}</td>
							<td>{{ $item->fullname }}</td>
							<td>{{ $item->rollno }}</td>
							<td>{{ $item->age }}</td>
							<td>{{ $item->address }}</td>
							<td>{{ $item->email }}</td>
							<td><button class="btn btn-warning">Edit</button></td>
							<td><button onclick="deleteStudent({{ $item->id }})" class="btn btn-danger">Delete</button></td>
						</tr>
					@endforeach
				</table>
				{{ $studentList->links() }}
			</div>
		</div>
	</div>
@stop

@section('js')
<script type="text/javascript">
	function deleteStudent(id) {
		$.post('{{ route('deleteStudent') }}', {
			_token: '{{ csrf_token() }}',
			id:id
		}, function(data, status) {
			// location.reload();
			$('#r_'+id).remove();
		})
	}
</script>
@stop