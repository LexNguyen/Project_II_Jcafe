@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Management's Material
@stop

@section('contentheader_title')
    Management's Material
@stop

@section('main-content')

	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th>No</th>
                        <th>Name material</th>
						<th>Import_date</th>
                        <th>Number</th>
						<th>Price</th>
                        <th width="80px"></th>
					</tr>
					@foreach ($materialList as $item)
						<tr>
							<td>{{ $index++ }}</td>
                            <td>{{ $item->name }}</td>
							<td>{{ $item->import_date }}</td>
                            <td>{{ $item->number }}</td>
							<td>{{ number_format($item->price) }}</td>
                            <td>
							<button class="btn btn-danger" onclick="deleteMaterial({{ $item->id }})">Delete</button>
                            </td>
						</tr>
						
					@endforeach
				</table>
				{{ $materialList->links() }}
			</div>
		</div>
	</div>
@stop

@section('js')
<script type="text/javascript">
    function deleteMaterial(id) {
        $.post('{{ route('deleteMaterial') }}', {
            "_token": "{{ csrf_token() }}",
            id: id
        }, function(data, status) {
            location.reload()
        })
    }
</script>
@stop