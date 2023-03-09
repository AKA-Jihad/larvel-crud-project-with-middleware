<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <style>
        .content{
            margin: 8% 16% 0 16%;
            background: #fff;
            padding: 64px 16px;
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, .2);
        }
        .login-text{
            font-style: normal;
            font-weight: 600 !important;
        }
    </style>
</head>
<body style="background-color: #00ac96">
    <div class="conatiner">
        <div class="row content">
            <div class="col-lg-6 mb-3">
                <img src="{{asset('img/school.png')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
                <h3 class="login-text">Log In</h3>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Enter Email" class="form-control w-75">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter Password" class="form-control w-75">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-sm" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>