@extends('layout')

@section('content')
    <div class="container mt-2">
        <h1>Add User</h1>
    </div>

    <div class="container">
        <div class="col-lg-6 py-4">
            <form action="/addsubmit" method="post">
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
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" name="address" class="form-control" placeholder="Enter Address">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
@endsection