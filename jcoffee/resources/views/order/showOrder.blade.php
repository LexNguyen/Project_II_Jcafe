@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Quan Ly Don Hang
@stop

@section('contentheader_title')
	Danh Sách Don Hang
@stop

@section('main-content')

	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th>No</th>
                        <th>Order date</th>
						<th>Total Price</th>
                        <th width="80px"></th>
					</tr>
					@foreach ($orderList as $item)
						<tr>
							<td>{{ $index++ }}</td>
                            <td>{{ $item->order_date }}</td>
							<td>{{ number_format($item->total_price) }}VND</td>
							<td>
							<button class="btn btn-danger" onclick="deleteOrder({{ $item->id }})">Delete</button>
                            </td>
						</tr>
					@endforeach
				</table>
				{{ $orderList->links() }}
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