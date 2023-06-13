<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aplikasi Gereja</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><br><br><br>
    <div class="container"><br>
        <div class="col-md-5 col-md-offset-4">
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post" class="border p-3" style="background-color: rgb(255, 255, 255);border-radius: 5px">
            @csrf
               <div class="login-box-body"><br><br>
                <p class="login-box-msg text-center"><img src="img/logo.png" style="width: 100px;height: 100px;border-radius: 50%;"><br><br>Gereja Bethel Indonesia,(GBI)Tabunan</p>
                <hr>
                <div class="form-group">
                    &emsp;<label class="control-label">Email</label>
                   <center>
                    <div class="col-12">
                        <input type="email" name="email" class="form-control" placeholder="Email" required="" style="height: 40px;"><br>
                        </div>
                   </center>
                </div>
                <div class="form-group">
                    &emsp;<label class="control-label">Password</label>
                    <center>
                    <div class="col-12">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="" style="height: 40px;"><br>
                        </div>
                    </center>
                </div>
                <center>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block" style="height: 40px;">Log In</button><br>
                    </div>
                </center>
         </form>
        </div>
    </div>
</body>
</html>




