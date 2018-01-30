@extends('layout.app')
@extends('layout.navigation')

@section('content')

    <div class="alert alert-success" role="alert" style="padding: 20px; margin-top: 20px">
        Posts created successfully...
    </div>

    <div class="btn-group">
        <div>
            <a href="{{ url('/todo/create') }}" class="btn btn-outline-info btn-lg"> Create Another Post </a>
        </div>
        &nbsp;&nbsp;
        <p class="text-primary"> or </p>
        &nbsp;&nbsp;
        <div>
            <a href="{{ url('/') }}" class="btn btn-outline-success btn-lg"> Go Back To Home Page </a>
        </div>
    </div>


@endsection