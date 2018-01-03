@extends('layout.app')
@extends('layout.navigation')

@section('content')
    <div class="container" style="padding: 20px;">
        <div class="card">
            <h4 class="card-header">{{ $todo->todo_name }}</h4>
            <div class="card-body">
                <p class="card-text">{{ $todo->description }}</p>
                <a href="{{ url('/') }}" class="btn btn-outline-primary"> Home </a>
                <a href="{{ url('/todo/update', compact('todo', $todo->id)) }}" class="btn btn-outline-success">Edit Posts</a>
            </div>
        </div>
    </div>
@endsection