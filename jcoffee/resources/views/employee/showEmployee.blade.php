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
				<table class="table table-bordered">
					<tr>
						<th>No</th>
                        <th>Position</th>
                        <th>Name</th>
						<th>Address</th>
						<th>Phone</th>
                        <th>Age</th>
                        <th width="80px"></th>
                        <th width="80px"></th>
					</tr>
					@foreach ($employeeList as $item)
						<tr>
							<td>{{ $index++ }}</td>
                            <td>{{ $item->password }}</td>
							<td>{{ $item->name }}</td>
							<td>{{ $item->address }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->age }}</td>
                            <td><a href="{{ route('editEmployee') }}?id={{ $item->id }}">
                            <button class="btn btn-warning">Edit</button></a></td>
                            <td>
							<button class="btn btn-danger" onclick="deleteEmployee({{ $item->id }})">Delete</button>
                            </td>
						</tr>
						
					@endforeach
				</table>
				{{ $employeeList->links() }}
			</div>
		</div>
	</div>
@stop

@section('js')
<script type="text/javascript">
    function deleteEmployee(id) {
        $.post('{{ route('deleteEmployee') }}', {
            "_token": "{{ csrf_token() }}",
            id: id
        }, function(data, status) {
            location.reload()
        })
    }
</script>
@stop