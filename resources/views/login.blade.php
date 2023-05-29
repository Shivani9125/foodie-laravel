<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('cssfiles/login.css')}}">
  
</head>
<body>
  <div class="card">
      <form action="loginUsers" method="post">
        @csrf
        <h1>Login</h1>
        <div class="form-group">
          <label class="form-label" for="email">Email</label>
          <input class="form-control" type="text" name="email">
          <span class="text-danger">@error('email') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input class="form-control" type="password" name="pass">
          <span class="text-danger">@error('pass') {{$message}} @enderror</span><br>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success" name="submit">Login</button><br>
          <a href="register">Create an Account</a>
        </div>
      </form>
    </div>
  </body>
  </html>