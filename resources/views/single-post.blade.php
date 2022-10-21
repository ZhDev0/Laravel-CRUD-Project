<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post View</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            background: rgba(93, 93, 93, 0.532);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5 pt-5">
                <div class="card">
                    <div class="card-header">
                        Post Details
                    </div>
                    <div class="card-body">
                        <form action="{{ route('add.postsubmit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text" id="title" class="form-control" value="{{ $post->title }}" name="title">
                            </div>
                            <div class="form-group">
                                <label for="body">Post Description</label>
                                <textarea name="body" class="form-control" id="body"  cols="79" rows="10">{{ $post->body }}</textarea>
                            </div>
                            <button type="submit" class="btn w-100 btn-primary mt-3 disabled">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
</body>
</html>
