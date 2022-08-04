@extends('layout.base')
@section('content')
      <div class="container-fluid mt-5">
      <h3 class="text-center">View Blog</h3>
            <div class="container d-flex justify-content-center align-items-center flex-column mt-5">

                @foreach($blogs as $blog)
                    <img src="{{'/uploads/'.$blog['image']}}" height="300px" width="300px" />
                    <p>{{$blog['title']}}</p>
                    <p>caetgory:{{$blog['category']}}</p>
                    <p>{{$blog['description']}}</p>
                    <a href="{{'/blog/update/'.$blog['id']}}" class="btn btn-primary">Update</a>
                    <a href="{{'/blog/delete/'.$blog['id']}}" class="btn btn-danger">Delete</a>
                @endforeach
            </div>
      </div>
@stop
