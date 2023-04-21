<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('cssfiles/register.css')}}">
</head>
<body>
    <div class="container">
<form action="insertData" method="POST" enctype="multipart/form-data">
       @csrf
        <h1>Register</h1>
        <label for="user">Username</label>
        <input type="text" name="user">
        <span class="messages">@error('user') {{$message}} @enderror</span><br>
        <label for="email">Email</label>
        <input type="text" name= "email">
        <span class="messages">@error('email') {{$message}} @enderror</span><br>
        <label for="pass">Password</label>
        <input type="password" name="pass">
        <span class="messages">@error('pass') {{$message}} @enderror</span><br>
        <label for="nick">Nickname</label>
        <input type="text" name= "nick"><br>
        <label for="city">City</label>
        <input class="form-input" type="text" name="city"><br>
         <?php //<button type="submit" class="btn1" name="submit">Submit</button> <br> ?>
         <button type="submit" class="btn btn-success" name="submit">Submit</button>
         <a href="login">Already Registered?Login</a>
       
</form>
</div> 
</body>

</html>