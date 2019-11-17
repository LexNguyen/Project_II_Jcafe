@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Quan Ly San Pham
@stop

@section('contentheader_title')
	Danh Sách San Pham
@stop

@section('main-content')

	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th>No</th>
                        <th>Name product</th>
						<th>Sale</th>
						<th>Price</th>
                        <th width="80px"></th>
                        <th width="80px"></th>
					</tr>
					@foreach ($productList as $item)
						<tr>
							<td>{{ $index++ }}</td>
                            <td>{{ $item->name }}</td>
							<td>{{ $item->sale }}</td>
							<td>{{ $item->price }}</td>
                            <td><a href="{{ route('editProducts') }}?id={{ $item->id }}">
                            <button class="btn btn-warning">Edit</button></a></td>
                            <td>
							<a href="{{ route('deleteProduct') }}?id={{ $item->id }}">
                            <button class="btn btn-danger">delete</button></a>
							<!-- <button class="btn btn-danger" onclick="deleteProduct({{ $item->id }})">Delete</button> -->
                            </td>
						</tr>
						
					@endforeach
				</table>
			</div>
		</div>
	</div>
@stop

@section('js')
<script type="text/javascript">
    function deleteProduct(id) {
        $.get('{{ route('deleteProduct') }}', {
            "_token": "{{ csrf_token() }}",
            id: id
        }, function(data, status) {
            location.reload()
        })
    }
</script>
@stop