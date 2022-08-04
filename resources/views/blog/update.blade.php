<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{Session::get('message')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
      <h3 class="text-center">Update Blog</h3>
            <div class="container d-flex justify-content-center align-items-center">
                <form enctype="multipart/form-data" action="{{'/blog/update/'.$blog['id']}}" method="POST">@csrf
                <div class="form-group mb-2">
                        <lable>Title</lable>
                        <input type="text" name="title" value="{{$blog['title']}}" class="form-control" />
                    </div>
                    <div class="form-group mb-2">
                        <lable>Description</lable>
                        <input type="text" value="{{$blog['description']}}" name="description" class="form-control" />
                    </div>
                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
