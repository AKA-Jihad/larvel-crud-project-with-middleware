@extends('layout')

@section('content')
    
    <div class="container">
        <div class="row py-3" >
            <div class="col-lg-6">
                <h1>Admin Register</h1>

        <form action="/register" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
            </div>
        </div>
    </div>
@endsection