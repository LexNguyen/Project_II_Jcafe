@extends('layouts.student')

@section('main-content')
<table class="table table-bordered">
	<tr>
		<th>STT</th>
		<th>Full Name</th>
		<th>Address</th>
		<th>Class Room</th>
	</tr>
	@foreach ($data as $item)
		<tr>
			<td>{{ $index++ }}</td>
			<td>{{ $item->fullname }}</td>
			<td>{{ $item->address }}</td>
			<td>{{ $item->class_name }}</td>
		</tr>
	@endforeach
</table>
@stop