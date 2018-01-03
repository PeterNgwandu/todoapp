@extends('layout.app')
@extends('layout.navigation')

@section('content')

    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="breadcrumb">
                    <h5 class="text-info"> Edit Todo Form </h5>
                </div>
                <form action="{{ url('/todo/update', compact('todo', $todo->id)) }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" name="todo_name" value="{{ $todo->todo_name }}" class="form-control" placeholder="Todo Name">
                    </div>

                    <div class="form-group">
                        <input type="date" name="deadline" value="{{ $todo->deadline }}" class="form-control" placeholder="Deadline">
                    </div>

                    <div class="form-group">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary"> Edit Todo </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection