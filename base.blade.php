<!doctype html>
<html lang="{{config('app.locale')}}">
  <head>
    <title>
        @yield('title')
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav li {
    display: inline;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

.hero {
    text-align: center;
    color: #ffffff;
    padding: 50px 20px;
    background-image: url('images/bg2.jpg');
    height: 100vh;
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
    background-position: center;

}

.Presentation{
  text-align: center;
  color: #ffffff;
  font-weight: bold;
  background: rgb(0, 0, 0);


}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}



footer {
    background-color: #000000;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

.membre{
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('images/bg1.jpg');
    height: 100%;
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
    background-position: center;
    transition: 5s;

    animation-name: animate;
    animation-direction: alternate-reverse;
    animation-play-state: running;
    animation-timing-function: ease-in-out;
    animation-duration: 30s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
}
@keyframes animate{
    0%{
        background-image: url('images/zale.jpg')
    }
    25%{
        background-image: url('images/karim.jpg')
    }
    50%{
        background-image: url('images/jarie.jpg')
    }
    75%{
        background-image: url('images/sadio.jpg')
    }
    100%{
        background-image: url('images/bg1.jpg')
    }
}

.person-card {
    width: 300px;
    background-color: #fff;
    margin: 20px;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.person-card img {
    width: 100%;
    border-radius: 50%;
    margin-bottom: 15px;
}

.person-card h2 {
    color: #333;
}

.person-card p {
    color: #666;
}
    </style>
  </head>
  <body>
    <header>
      <h1>Our Project</h1>
      <nav>
          <ul>
              <li><a href="{{route('home')}}">Accueil</a></li>
              <li><a href="{{route('FI')}}">Formulaire d'inscription</a></li>
              <li><a href="{{route('Connexion')}}">Page de connexion</a></li>
          </ul>
      </nav>
  </header>

  <section class="hero">
    <br><br><br><br>
      <h2>Bonjour M.SOW</h2>
      <p>Nous avons le plaisir de vous acceuillir dans notre site web</p>
      <a href="{{route('Connexion')}}" class="cta-button">Connexion</a>
  </section>

  <section class="Presentation">
    <br>
    <h2>Presentation des membres du groupe:</h2>

  </section>

  <section class="membre">
    <div class="person-card">
        <img src="images/zale.jpg" alt="Person 1">
        <h2>Serigne Saliou Dia</h2>
        <p>Etudiant en licence 3 en MIO a l'UIDT de Thies.</p>
    </div>

    <div class="person-card">
        <img src="images/karim.jpg" alt="Person 2">
        <h2>Abdou Karim Drame</h2>
        <p>Etudiant en licence 3 en MIO a l'UIDT de Thies.</p>
    </div>

    <div class="person-card">
        <img src="images/jarie.jpg" alt="Person 3">
        <h2>Sokhna Diarietoullah Bousso Ndiaye</h2>
        <p>Etudiante en licence 3 en MIO a l'UIDT de Thies.</p>
    </div>

    <div class="person-card">
        <img src="images/sadio.jpg" alt="Person 4">
        <h2>Youssouph Sadio</h2>
        <p>Etudiant en licence 3 en MIO a l'UIDT de Thies.</p>
    </div>
  </section>
  <main class="row">
    <div class="col-12">
        @yield('content')
    </div>
  </main>

  <footer>
      <p>&copy; 2024 OUR PROJECT. Tous droits réservés.</p>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
