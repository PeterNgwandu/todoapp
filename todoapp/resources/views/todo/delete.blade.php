@extends('layout.app')
@extends('layout.navigation')

@section('content')

    <div class="alert alert-success" role="alert" style="padding: 20px; margin-top: 20px">
        Todo deleted successfully...
    </div>

    <div>
        <a href="{{ url('/') }}" class="btn btn-outline-danger btn-lg"> Go back home </a>
    </div>

@endsection