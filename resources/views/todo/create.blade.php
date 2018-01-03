@extends('layout.app')
@extends('layout.navigation')

@section('content')

    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="breadcrumb">
                    <h5 class="text-info"> Create Todo Form </h5>
                </div>
                <form action="{{ url('/todo') }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                <span class="text-dark"><small> {{ $error }} </small></span>
                            </div>
                            @endforeach
                            @endif
                        <input type="text" name="todo_name" class="form-control" placeholder="Todo Name">
                    </div>

                    <div class="form-group">
                        <input type="date" name="deadline" class="form-control" placeholder="Deadline">
                    </div>

                    <div class="form-group">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary"> Create Todo </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection