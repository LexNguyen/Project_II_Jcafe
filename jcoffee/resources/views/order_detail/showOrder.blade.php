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
                        <th>Table_number</th>
						<th>Number</th>
                        <th>Name product</th>
						<th>Price</th>
						<th>Customer_request</th>
						<th></th>
						<th></th>
					</tr>
                    @foreach ($order_detail as $item)
						<tr>
							<td>{{ $index++ }}</td>
							<td>{{ $item->table_number }}</td>
                            <td>{{ $item->number }}</td>
							<td>{{ $item->name }}</td>
							<td>{{ number_format($item->price_detail) }}VND</td>
							<td>{{ $item->customer_request }}</td>
							<td><a href="{{ route('editO') }}?id={{ $item->id }}">
                            <button class="btn btn-warning">Edit</button></a></td>
                            <td>
							<button class="btn btn-danger" onclick="deleteOrder_detail({{ $item->id }})">Delete</button>
                            </td>
						</tr>
					@endforeach
				</table>
				{{ $order_detail->links()}}
			</div>
		</div>
	</div>
@stop

@section('js')
<script type="text/javascript">
    function deleteOrder_detail(id) {
        $.post('{{ route('deleteOrder_detail') }}', {
            "_token": "{{ csrf_token() }}",
            id: id
        }, function(data, status) {
            location.reload()
        })
    }
</script>
@stop
