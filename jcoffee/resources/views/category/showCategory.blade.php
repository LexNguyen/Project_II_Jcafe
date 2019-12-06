@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Categor(Product)
@stop

@section('contentheader_title')
    Categor(Product)
@stop

@section('main-content')

	<div class="container-fluid spark-screen" style="background-color: white; padding-top: 15px">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tr>
						<th>No</th>
                        <th>Name</th>
                        <th width="80px"></th>
					</tr>
					@foreach ($categoryList as $item)
						<tr>
							<td>{{ $index++ }}</td>
                            <td>{{ $item->name }}</td>
							<td>
                            <button class="btn btn-danger" onclick="deleteCategory({{ $item->id }})">Delete</button>
                            </td>
						</tr>
					@endforeach
				</table>
				{{ $categoryList->links() }}
			</div>
		</div>
	</div>
@stop

@section('js')
<script type="text/javascript">
    function deleteCategory(id) {
        $.post('{{ route('deleteCategory') }}', {
            "_token": "{{ csrf_token() }}",
            id: id
        }, function(data, status) {
            location.reload()
        })
    }
</script>
@stop