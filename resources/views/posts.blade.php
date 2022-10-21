<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts Page</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            background: rgba(93, 93, 93, 0.532);
        }
        /* #table {
            overflow-y: auto;
        } */
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div id="table" class="col-md-6 offset-3 mt-5 pt-5 bg-white w-70">
                @if (Session::has('post_deleted'))
                    <div class="alert alert-danger">
                        {{ Session::get('post_deleted') }}
                    </div>
                @endif
                <table class="table w-100 h-100">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Body</th>
                            <th scope="col">Show</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->title }}</td>
                                <td>{{ $value->body }}</td>
                                <td><a href="singlepost/{{ $value->id }}" class="btn btn-success mt-5">View</a></td>
                                <td><a href="deletepost/{{ $value->id }}" class="btn btn-danger mt-5">Delete</a></td>
                                <td><a href="editpost/{{ $value->id }}" class="btn btn-info mt-5">Edit</a></td>
                            </tr>
                        @endforeach
            </div>
        </div>
    </div>
    </div>
    </tbody>
    </table>






    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
</body>

</html>
