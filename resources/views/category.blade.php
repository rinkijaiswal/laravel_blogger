@extends('layout.base')
@section('content')
      <div class="container-fluid mt-5">
      <h3 class="text-center">View Blog</h3>
            <div class="container d-flex justify-content-center align-items-center flex-column">
                <form method="post" action="/category/create">@csrf
                    <div class="form-group mb-2">
                        <label>Name</label>
                        <input type="text" name="name" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
      </div>
@stop
