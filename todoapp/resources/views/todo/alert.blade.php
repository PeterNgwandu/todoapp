@extends('layout.app')
@extends('layout.navigation')

@section('content')

    <div class="alert alert-danger" role="alert" style="padding: 20px; margin-top: 20px">
        No TodoList
    </div>

    <div>
        <a href="{{ url('/todo/create') }}" class="btn btn-outline-danger btn-lg"> Create TodoList </a>
    </div>

@endsection