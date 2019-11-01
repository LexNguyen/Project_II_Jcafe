@extends('layouts.student')

@section('main-content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>STT</th>
            <th>Roll No</th>
            <th>Full Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Address</th>
            <th width="80px"></th>
            <th width="80px"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($studentList as $item)
            <tr>
                <th>{{ $index++ }}</th>
                <td>{{ $item->rollno }}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address }}</td>
                <td>
                    <a href="{{ route('viewAdd') }}?id={{ $item->id }}"><button class="btn btn-warning">Edit</button></a>
                </td>
                <td>
                    <button class="btn btn-danger" onclick="deleteStudent({{ $item->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $studentList->links() }}
@stop

@section('js')
<script type="text/javascript">
    function deleteStudent(id) {
        $.post('{{ route('deleteStudent') }}', {
            "_token": "{{ csrf_token() }}",
            id: id
        }, function(data, status) {
            location.reload()
        })
    }
</script>
@stop