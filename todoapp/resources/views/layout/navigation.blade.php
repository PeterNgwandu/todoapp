<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 90px !important;">
    <a class="navbar-brand" href="{{ url('/') }}"><span class="text-success">T</span>o<span class="text-warning">d</span>o<span class="text-danger">Ap<span class="text-primary">p</span></span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/todo/create') }}">Create TodoList </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">Manage TodoList</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('todo/upload') }}"> Uploading Files </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('todo/upload') }}"> Profile </a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>