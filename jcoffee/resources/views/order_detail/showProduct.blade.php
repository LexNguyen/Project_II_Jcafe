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
						<th>Id_order</th>
						<th>Id_product</th>
                        <th>Table_number</th>
						<th>Number</th>
                        <th>Name product</th>
						<th>Price</th>
						<th>Customer_request</th>
					</tr>
					@foreach ($productList as $item)
						<tr>
							<td>{{ $index++ }}</td>
							<td>{{ $item->id_o }}</td>
							<td>{{ $item->id_p }}</td>
							<td>{{ $item->table_number }}</td>
                            <td>{{ $item->number }}</td>
							<td>{{ $item->name }}</td>
							<td>{{ $item->price_detail }}</td>
							<td>{{ $item->customer_request }}</td>
							<td><a href="{{ route('edit') }}?id={{ $item->id }}">
                            <button class="btn btn-warning">Edit</button></a></td>
                            <td>
                            <button class="btn btn-danger" onclick="deleteOrder({{ $item->id }})">Delete</button>
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
    function deleteOrder(id) {
        $.post('{{ route('deleteOrder') }}', {
            "_token": "{{ csrf_token() }}",
            id: id
        }, function(data, status) {
            location.reload()
        })
    }
</script>
@stop