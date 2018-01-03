@extends('layout.app')
@extends('layout.navigation')

@section('content')

    <div class="alert alert-success" role="alert" style="padding: 20px; margin-top: 20px">
        Posts created successfully...
    </div>

    <div>
        <a href="{{ url('/todo/create') }}" class="btn btn-outline-danger btn-lg"> Create Another Post </a>
    </div>

    @endsection