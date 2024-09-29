@extends('\layouts.main')
@push('head')
<title>Update Todo</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Update Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{route("todo.updateData")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4">Task Name</label>
                <input type="text" name="name" class="form-control" id="" value="{{$todo->name}}">
                <label for="" class="form-label mt-4">Description</label>
                <input type="text" name="work" class="form-control" id="" value="{{$todo->work}}">
                <label for="" class="form-label mt-4">Status</label>
                <select name="status" class="form-control">
                    <option value="In Progress" {{$todo->status == 'In Progress' ? 'selected' : ''}}>In Progress</option>
                    <option value="Complete" {{$todo->status == 'Complete' ? 'selected' : ''}}>Complete</option>
                </select>
                <input type="number" name="id" value="{{$todo->id}}" hidden>
                <button class="btn btn-primary btn-lg mt-4">Update Todo</button>
            </form>
        </div>
    </div>
</div>
@endsection
