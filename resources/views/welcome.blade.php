@extends('\layouts.main')
@push('head')
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Todo List</div>
        <a href="{{route("todo.create")}}" class="btn btn-primary btn-lg">Create Todo</a>
    </div>
    <table class="table table-striped" style="background-color: #d3d3d3;">
        <tr>
            <th>Task Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($todos as $todo)
            <tr valign="middle">
                <td>{{$todo->name}}</td>
                <td>{{$todo->work}}</td>
                <td>
                    @if($todo->status == 'Complete')
                        <span class="badge badge-complete">Complete</span>
                    @elseif($todo->status == 'In Progress')
                        <span class="badge badge-progress">In Progress</span>
                    @endif
                </td>
                <td>
                    <a href="{{route("todo.edit",$todo->id)}}" class="btn btn-success btn-sm">Update</a>
                    <a href="{{route("todo.delete",$todo->id)}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach 
    </table>
</div>
@endsection
