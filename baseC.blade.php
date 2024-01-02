<!doctype html>
<html lang="en">
  <head>
    <title>
        @yield('title')
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
body{
    background-image: url('images/bg2.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
label {
    color: #ffffff;
    font-size: 16px;
    font-weight: bold;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 8px 12px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
}
input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 30%;
}
form {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
}

.FI{
    color: #fefffe;
    text-align: center;
    margin-top: 5%;
}
.cc{
    text-align: center;
    color:#fefffe ;
}
  </style>
  <body>
    <h1 class="FI">Connexion</h1>
    <br><br><br><br>

<form action="/Connexion/traitement" method="post">
@csrf
 <label for="email">Email:</label><br>
 <input type="text" id="email" name="email"><br>

 <label for="password">Mot de passe:</label><br>
 <input type="password" id="password" name="password"><br>

 <input type="submit" value="Connexion"><br>
 <p class="cc">Si vous n'avez pas de compte, <a href="{{route('FI')}}">Creez un compte</a></p>
</form>
@if (session('status'))
<a href="#" class="bottom">{{ session('status')}} </a>

@endif
<main class="row">
    <div class="col-12">
        @yield('content')
    </div>
</main>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
