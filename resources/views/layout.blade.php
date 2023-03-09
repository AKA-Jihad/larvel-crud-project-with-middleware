<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD Project</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
</head>
<body>
    <div class="header">
        @section('header')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">CRUD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/list">List</a>
                <a class="nav-item nav-link" href="/add">Add</a>
                <a class="nav-item nav-link" href="#">Search</a>
                @if (Session::get('admin'))
                  <a class="mt-2" style="text-decoration: none;"  href=""><span>Welcome <strong>{{(Session::get('admin'))}}</strong></span></a>
              @else
              <a class="nav-item nav-link" href="/login">Login</a>
              <a class="nav-item nav-link" href="/register">Register</a>
              @endif
              </div>
            </div>
          </nav>
        @show
    </div>

    <div class="content">
        @section('content')

        @show
    </div>

    @section('footer')
    <div class="footer bg-dark py-3">
        <h2 class="text-center text-light">Footer</h2>
    </div>
    @show
</body>
</html>