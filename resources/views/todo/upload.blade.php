@extends('layout.app')
@extends('layout.navigation')

@section('content')

    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="breadcrumb">
                    <h4 class="text-info"> Upload Your Todo files here </h4>
                </div>

                @if($errors->count() > 0)

                    <div class="container">
                        <div class="alert alert-danger">
                            <p class="text-primary"> No file to be uploaded </p>
                        </div>
                    </div>

                    @endif

                <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="file" name="item_name" class="btn btn-outline-primary" multiple value="Upload">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary"> Upload </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection