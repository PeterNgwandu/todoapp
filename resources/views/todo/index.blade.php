@extends('layout.app')
@extends('layout.navigation')

@section('content')

    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="breadcrumb">
                    <h5 class="text-info"> My Todo List </h5>
                </div>
                    <div class="">
                        <table class="table table-bordered  table-striped">
                            <thead>
                            <tr>
                                <th> Todo ID </th>
                                <th> Todo Name </th>
                                <th> Action </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($todo as $t)

                                <tr>
                                    <td> {{ $t->id }} </td>
                                    <td><a href="{{ url('todo', $t->id) }}"
                                           style="text-decoration: none;"
                                           onMouseOver="this.style.color='orange'"
                                           onMouseOut="this.style.color='black'"
                                        >{{ $t->todo_name }} </a></td>
                                    <td>
                                        <a href="{{ url('/todo/edit', compact('t', $t->id)) }}" class="btn btn-outline-success"> Edit </a>
                                        <a href="{{ url('/todo/delete', compact('t',$t->id)) }}" class="btn btn-outline-danger"> Delete </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="breadcrumb" style="background: grey">
                            <a href="{{ url('/todo/create') }}" class="btn btn-primary"> Add Todo </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="" class="btn btn-success"> Load More </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection